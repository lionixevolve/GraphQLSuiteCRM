<?php
if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once('data/SugarBean.php');
require_once('include/entryPoint.php');
require_once('config.php');
require_once('include/utils.php');
require_once('include/TimeDate.php');
require_once('modules/ACLRoles/ACLRole.php');
require_once('include/SugarLogger/LoggerManager.php');
require_once('modules/Opportunities/Opportunity.php');
require_once('modules/Contacts/Contact.php');
require_once('modules/Accounts/Account.php');
require_once('modules/Calls/Call.php');
require_once('modules/Leads/Lead.php');
require_once('modules/AOS_Contracts/AOS_Contracts.php');
require_once('modules/AOS_Invoices/AOS_Invoices.php');
require_once('modules/Prospects/Prospect.php');
require_once('modules/ProspectLists/ProspectList.php');
require_once('modules/Cases/Case.php');
require_once('modules/Meetings/Meeting.php');
require_once('modules/Tasks/Task.php');
require_once('modules/Documents/Document.php');
require_once('modules/Notes/Note.php');
require_once('include/formbase.php');
require 'vendor/autoload.php';
use Youshido\GraphQL\Execution\Processor;
use Youshido\GraphQL\Schema;

// initialize app
$appRest = new \Slim\Slim();
// // route middleware for simple API authentication
// function authenticate(\Slim\Route $route) {
//
// }
// $appRest->options('/(:name+)', function() use ($app) {
//     //...return correct headers...
//     $app->response()->header('Access-Control-Allow-Origin','*');
//     $app->response()->header('Access-Control-Allow-Headers','Origin, X-Requested-With, Content-Type, Accept, Authorization, X-Auth-Token');
//     $app->response()->header('Access-Control-Allow-Methods','GET, POST, OPTIONS, PUT, LINK, PATCH, DELETE');
//     //...return correct headers...
// });
$corsOptions = array(
    "origin" => "*",
    "exposeHeaders" => array("X-My-Custom-Header", "X-Another-Custom-Header"),
    "maxAge" => 1728000,
    "allowCredentials" => True,
    "allowMethods" => array("GET, POST, OPTIONS, PUT, LINK, PATCH, DELETE"),
    "allowHeaders" => array("Origin, X-Requested-With, Content-Type, Accept, Authorization, X-Auth-Token")
    );
$appRest->add(new \CorsSlim\CorsSlim($corsOptions));


function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

$appRest->hook('slim.before.dispatch', function () use ($appRest) {
    $appRest->contentType('application/json; charset=utf-8');
    error_reporting(E_ERROR);
    session_start();
    global $sugar_config, $current_user;
    $mock_user = new User();
    $req = $appRest->request;
    //Get resource URI
    $resourceUri = $req->getResourceUri();
    if (isset($_SESSION['authenticated_user_id']) || substr_count($resourceUri,'/suitecrm/dropdown') >0) {
        $current_user = $mock_user->retrieve("{$_SESSION['authenticated_user_id']}");
        $user_id = $_SESSION['authenticated_user_id'];
        if (!$current_user->id) {
            if(substr_count($resourceUri,'/suitecrm/dropdown') <1){
                $appRest->halt(401);
            }
        }
    } else {
        if (!$current_user->id) {
            $appRest->halt(403);
        }
    }
});

$appRest->post('/graphql', function () use ($appRest) {
    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/graphql/Schema/SuiteCRMSchema.php';       // including PostType definition
    require_once __DIR__.'/graphql/schema-bootstrap.php';
    $schema = new SuiteCRMSchema();
    $processor = new Processor($schema);
    $parsedBody = $appRest->request->getBody();
    $parsedBody = json_decode($parsedBody, true);
    $parsedVariables = $parsedBody['variables'];
    $parsedBody = $parsedBody['query'];
    $processor->processPayload($parsedBody,$parsedVariables);
    echo json_encode($processor->getResponseData())."\n";
});
$appRest->get('/forms/:name',function ($name = null) use ($appRest) {
    $file = file_get_contents('./example.json', FILE_USE_INCLUDE_PATH);
    echo $file;
});
$appRest->post('/sendEmail', function () use ($appRest) {
    $parsedBody     = $appRest->request->getBody();
    $parsedBody     = json_decode($parsedBody);
    $message        = $parsedBody->message;
    $recipient      = $parsedBody->recipient;
    $template       = $parsedBody->template;
    $subject        = $parsedBody->subject;
    $attachments   = $parsedBody->attachments;

    if (empty($message) || empty($recipient) || empty($template)) {
        return json_encode("Invalid parameters");
    }
    global $current_user, $db;
    require_once("include/SugarPHPMailer.php");
    $query                  = "select id, name from email_templates where name ='".$template."';";// where name like '%a2%' limit 1";
    $results                = $db->query($query);
    $current_emailtemplate  = new EmailTemplate();
    $idTemplate             =   '';
    while ($row = $db->fetchByAssoc($results)) {
        $idTemplate=$row['id'];
    }
    $current_emailtemplate->retrieve($idTemplate);
    //escape email template contents.
    $current_emailtemplate->subject=from_html($current_emailtemplate->subject);
    $current_emailtemplate->body_html=from_html($current_emailtemplate->body_html);
    $current_emailtemplate->body=from_html($current_emailtemplate->body);
    $mail = new SugarPHPMailer();
    $mail->Mailer = "smtp"; //make configurable
    $mail->IsHTML(true);
     // Set the different fields for the attachments
     foreach ($attachments as $key => $attachement) {
         $file_name  = $attachement->name;
         $location  = __DIR__."/upload/{$attachement->id}";
         $mime_type  = $attachment->$attachement->mimeType;
         // Add attachment to email
         $mail->AddAttachment($location, $file_name, 'base64', $mime_type);
     }


    $email_body=$current_emailtemplate->body_html;
    $email_body = str_replace('{{message}}', $message, $email_body);
    $current_emailtemplate->body_html= $email_body;

    $mail->ClearAllRecipients();
    $mail->ClearReplyTos();
    $mail->setMailerForSystem();
    /** [IC] jeggers: 8/6/2008 */
    $sugarEmailAddress = new SugarEmailAddress();
    /** end [IC] */
    $mail->AddAddress($recipient);
    $emailObj = new Email();
    $defaults = $emailObj->getSystemDefaultEmail();
    $mail->From = $defaults['email'];
    $mail->Sender = $defaults['email'];
    $mail->FromName = $defaults['name'];

    if ($subject=='From Template') {
        $mail->Subject =  $current_emailtemplate->subject;
    } else {
        $mail->Subject=$subject;
    }
    //check if this template is meant to be used as "text only"
    $text_only = false;
    if (isset($current_emailtemplate->text_only) && $current_emailtemplate->text_only) {
        $text_only =true;
    }
    //if this template is textonly, then just send text body.
    if ($text_only) {
        $this->description_html = '';
        $mail->IsHTML(false);
    }
    $mail->Body = $current_emailtemplate->body_html;

    $mail->prepForOutbound();
    $success = $mail->Send();
    if (!$success) {
        error_log("Email failed to send. ".$mail->ErrorInfo);
        error_log($subject);
        error_log($message);
        error_log($recipient);
        error_log($template);
        echo json_encode($mail->ErrorInfo);
    }
    echo json_encode(["result"=>"success"]);
});

$appRest->post('/upload/attachment', function () use ($appRest) {
    global $sugar_config, $current_user;
    function createSuiteCrmDocument($data, $parentType, $parentId)
    {
        // Try to upload file
        try {
            // Success!
            $document = new Document();
            //         $document->id = "testing-a-lot";
            //         $document->new_with_id = true;
            $document->document_name = $data['name'];
            $document->filename = $data['name'];
            $document->category_id = 'Sales';
            $document->status_id = 'Active';
            $document->assigned_user_id = $user_id;
            $document->save();
            // $contents = file_get_contents("upload://{$data['name']}");

            $revision = new DocumentRevision();
            //         $revision->id = "testing-a-lot-rev";
            //         $revision->new_with_id = true;
            $revision->document_id = $document->id;
            //$revision->file = base64_encode($contents);
            $revision->filename = $document->filename;
            $revision->revision = 1;
            $revision->doc_type = 'Sugar';
            $revision->change_log = 'Document Created';
            $revision->file_mime_type = $data['mime'];
            $revision->file_ext = $data['extension'];
            $revision->save();

            $document->load_relationship(strtolower($parentType));
            if (strtolower($parentType)=="contacts") {
                $document->parent_type = ucwords(strtolower($parentType));
                $document->contact_id = $parentId;
                $document->parent_id = $parentId;
            }
            $document->contacts->add($parentId);
            $document->save();

            $data['document_id'] = $document->id;
            $data['revision_id'] = $revision->id;
            $data['document_file'] = "index.php?entryPoint=download&type=Documents&id={$revision->id}";
            return $data;
        } catch (\Exception $e) {
            // Fail!
            $errors = "Cannot create Document ";
            return $errors;
        }
    }

    function createSuiteCrmNote($data, $parentType, $parentId)
    {
        // Try to upload file
        try {
            // Success!
            $note = new Note();
            //         $note->id = "testing-a-lot";
            //         $note->new_with_id = true;
            $note->name = $data['name'];
            $note->filename = $data['name'];
            $note->file_mime_type = $data['mime'];
            $note->assigned_user_id = $user_id;
            if (strtolower($parentType) == 'contacts') {
                $note->contact_id = $parentId;
            }
            $note->save();
            // $contents = file_get_contents("upload://{$data['name']}");
            $data['note_id'] = $note->id;
            $data['note_file'] = "index.php?entryPoint=download&type=Notes&id={$note->id}";
            return $data;
        } catch (\Exception $e) {
            // Fail!
            $errors = "Cannot create Document ";
            return $errors;
        }
    }


    if (empty($appRest->request->params('parent_id'))) {
        return false;
    } else {
        $parentId = $appRest->request->params('parent_id');
        $parentType = $appRest->request->params('parent_type');
    }
    $storage = new \Upload\Storage\FileSystem(__DIR__."/".$sugar_config['upload_dir']);
    $file = new \Upload\File('upload_files', $storage);
    if (count($file)>1) {
        //Multiple file upload
        $results=[];
        for ($i=0 ; $i <count($file) ; $i++) {
            // error_log(__FILE__." ". __LINE__." ". $i);
            // Access data about the file that has been uploaded
            $data = array(
                'name'       => $file[$i]->getNameWithExtension(),
                'extension'  => $file[$i]->getExtension(),
                'mime'       => $file[$i]->getMimetype(),
                'size'       => $file[$i]->getSize(),
                'md5'        => $file[$i]->getMd5(),
                'dimensions' => $file[$i]->getDimensions()
            );

            // $result=createSuiteCrmDocument($data, $parentType, $parentId);
            $result=createSuiteCrmNote($data, $parentType, $parentId);
            $file[$i]->setName($result['note_id']);
            $file[$i]->setExtension("");
            $results[]=$result;
        }
        try {
            //Trying to save the File
            $file->upload();
            echo json_encode($results);
        } catch (\Exception $e) {
            $results[]=$file->getErrors();
            error_log(__FILE__." ". __LINE__." ". print_r($e, 1));
            echo json_encode($results);
        }
    } else {
        $data = array(
            'name'       => $file->getNameWithExtension(),
            'extension'  => $file->getExtension(),
            'mime'       => $file->getMimetype(),
            'size'       => $file->getSize(),
            'md5'        => $file->getMd5(),
            'dimensions' => $file->getDimensions()
        );
        $result=createSuiteCrmNote($data, $parentType, $parentId);
        $file->setName($result['note_id']);
        $results[]=$result;
        $file->setExtension("");
        try {
            $file->upload();
            echo json_encode($results);
        } catch (\Exception $e) {
            $result[]=$file->getErrors();
            // error_log(__FILE__." ". __LINE__." ". print_r($e, 1));
            echo json_encode($results);
        }
    }
});

$appRest->get('/accounts(/:id)', function ($id = null) use ($appRest) {
    global $sugar_config, $current_user;
    $accountBean = BeanFactory::getBean('Accounts');

    if (isset($id)) {
        $account = $accountBean->retrieve($id);
        $module_arr = array();
        if ($account->id && $account->ACLAccess('view')) {
            $all_fields = $account->column_fields;
            foreach ($all_fields as $field) {
                if (isset($account->$field) && !is_object($account->$field)) {
                    $account->$field = from_html($account->$field);
                    $account->$field = preg_replace("/\r\n/", "<BR>", $account->$field);
                    $account->$field = preg_replace("/\n/", "<BR>", $account->$field);
                    $module_arr['accounts'][$field] = $account->$field;
                }
            }
            echo json_encode($module_arr);
        } else {
            $appRest->halt(403, json_encode('You shall not pass!'));
        }
    } else {
        $list = $accountBean->get_list();
        $resultArray = [];
        if (is_array($list) && !empty($list)) {
            foreach ($list['list'] as $account) {
                if ($account->ACLAccess('list')) {
                    if ($account->id && $account->ACLAccess('view')) {
                        $all_fields = $account->column_fields;
                        foreach ($all_fields as $field) {
                            if (isset($account->$field) && !is_object($account->$field)) {
                                $account->$field = from_html($account->$field);
                                $account->$field = preg_replace("/\r\n/", "<BR>", $account->$field);
                                $account->$field = preg_replace("/\n/", "<BR>", $account->$field);
                                $module_arr['accounts'][$field] = $account->$field;
                            }
                        }
                        $resultArray[]=$module_arr;
                    }
                } else {
                    $appRest->halt(403, json_encode('You shall not pass!'));
                }
            }
            echo json_encode($resultArray);
        }
    }
});


$appRest->get('/calls(/:id)', function ($id = null) use ($appRest) {
    global $sugar_config, $current_user;
    $callBean = BeanFactory::getBean('Calls');


    if (isset($id)) {
        $call = $callBean->retrieve($id);
        $module_arr = array();
        if ($call->id && $call->ACLAccess('view')) {
            $all_fields = $call->column_fields;
            foreach ($all_fields as $field) {
                if (isset($account->$field) && !is_object($call->$field)) {
                    $call->$field = from_html($call->$field);
                    $call->$field = preg_replace("/\r\n/", "<BR>", $call->$field);
                    $call->$field = preg_replace("/\n/", "<BR>", $call->$field);
                    $module_arr['calls'][$field] = $call->$field;
                }
            }
            echo json_encode($module_arr);
        } else {
            $appRest->halt(403, json_encode('You shall not pass!'));
        }
    } else {
        $list = $callBean->get_list();
        $resultArray = [];
        if (is_array($list) && !empty($list)) {
            foreach ($list['list'] as $call) {
                if ($call->ACLAccess('list')) {
                    if ($call->id && $call->ACLAccess('view')) {
                        $all_fields = $call->column_fields;
                        foreach ($all_fields as $field) {
                            if (isset($call->$field) && !is_object($call->$field)) {
                                $call->$field = from_html($call->$field);
                                $call->$field = preg_replace("/\r\n/", "<BR>", $call->$field);
                                $call->$field = preg_replace("/\n/", "<BR>", $call->$field);
                                $module_arr['calls'][$field] = $call->$field;
                            }
                        }
                        $resultArray[]=$module_arr;
                    }
                } else {
                    $appRest->halt(403, json_encode('You shall not pass!'));
                }
            }
            echo json_encode($resultArray);
        }
    }
});

$appRest->get('/contacts(/:id)', function ($id = null) use ($appRest) {
    global $sugar_config, $current_user;
    $contactBean = BeanFactory::getBean('Contacts');

    if (isset($id)) {
        $contact = $contactBean->retrieve($id);
        $module_arr = array();
        if ($contact->id && $contact->ACLAccess('view')) {
            $all_fields = $contact->column_fields;
            foreach ($all_fields as $field) {
                if (isset($contact->$field) && !is_object($contact->$field)) {
                    $contact->$field = from_html($contact->$field);
                    $contact->$field = preg_replace("/\r\n/", "<BR>", $contact->$field);
                    $contact->$field = preg_replace("/\n/", "<BR>", $contact->$field);
                    $module_arr['contacts'][$field] = $contact->$field;
                }
            }
            echo json_encode($module_arr);
        } else {
            $appRest->halt(403, json_encode('You shall not pass!'));
        }
    } else {
        $list = $contactBean->get_list();
        $resultArray = [];
        if (is_array($list) && !empty($list)) {
            foreach ($list['list'] as $contact) {
                if ($contact->ACLAccess('list')) {
                    if ($contact->id && $contact->ACLAccess('view')) {
                        $all_fields = $contact->column_fields;
                        foreach ($all_fields as $field) {
                            if (isset($contact->$field) && !is_object($contact->$field)) {
                                $contact->$field = from_html($contact->$field);
                                $contact->$field = preg_replace("/\r\n/", "<BR>", $contact->$field);
                                $contact->$field = preg_replace("/\n/", "<BR>", $contact->$field);
                                $module_arr['contacts'][$field] = $contact->$field;
                            }
                        }
                        $resultArray[]=$module_arr;
                    }
                } else {
                    $appRest->halt(403, json_encode('You shall not pass!'));
                }
            }
            echo json_encode($resultArray);
        }
    }
});
$appRest->get('/suitecrm/dropdown(/:name)(/:type)', function ($name = null, $type=null) use ($appRest) {
    global $sugar_config, $current_user;
    $suitecrm_list=$GLOBALS['app_list_strings'][$name];
    $list = array();
    //$list[]=array(''=>''); //when empty value is needed
    foreach ($suitecrm_list as $value => $name) {
        //$list[] = array('value' => $value, 'name' => $name, 'default' => $default, 'selected' => $selected); //this  is the below format example
        switch ($type) {
            case 'native':
                $list[] = array('value' => $value, 'name' => $name);
                break;
            case 'formio':
                $list[] = array('label' => $value, 'value' => $name);
                break;
            default:
                $list[] = array('id' => $value, 'name' => $name);
                break;
        }

    }

    // if($type=='formio'){
    //     error_log($type);
    //     $list=array('data'=>$list);
    // }
    echo json_encode($list);
    error_log(json_encode($list));
});

$appRest->get('/suitecrm/applist(/:name)', function ($name = null) use ($appRest) {
    global $sugar_config, $current_user;
    $suitecrm_list=$GLOBALS['app_list_strings'][$name];
    echo json_encode($suitecrm_list);
});

$appRest->get('/whoami', function () use ($appRest) {
    global $sugar_config, $current_user;
    //We retrieve the current user in order to get
    // all the fields we have to serialize
    $userBean = BeanFactory::getBean('Users');
    $user=$userBean->retrieve($current_user->id);
    $all_fields = $user->column_fields;
    $roles = ACLRole::getUserRoleNames($current_user->id);
    if (!empty($roles)) {
        $module_arr['user']['roles']=$roles;
    }
    $timezone = TimeDate::userTimezone($user);
    $module_arr['user']['language']=$GLOBALS['current_language'];
    $module_arr['user']['timezone']=$timezone;

    foreach ($all_fields as $field) {
        if (isset($current_user->$field) && !is_object($current_user->$field)) {
            if (is_string($current_user->$field)) {
                $current_user->$field = from_html($current_user->$field);
                $current_user->$field = preg_replace("/\r\n/", "<BR>", $current_user->$field);
                $current_user->$field = preg_replace("/\n/", "<BR>", $current_user->$field);
            }
            if (isset($translate)
                && !empty($current_user->$field) && isset($current_user->field_defs[$field]['options'])
                && $current_user->field_defs[$field]['options']!='date_range_search_dom'
                && $current_user->field_defs[$field]['options']!='numeric_range_search_dom') {
                $displayFieldValue = $GLOBALS['app_list_strings'][$current_user->field_defs[$field]['options']][$current_user->$field];
                $field_hidden=$field . "_hidden";
                $current_user->$field_hidden=$current_user->$field;

                $current_user->$field=$displayFieldValue;
            }
            if (isset($field_hidden)) {
                $module_arr['user'][$field_hidden] = $current_user->$field_hidden;
                unset($field_hidden);
            }
            $module_arr['user'][$field] = $current_user->$field;
        }
    }
//     error_log(print_r( $module_arr,1));
    //Override User Hash - we don't need it
    $module_arr['user']['user_hash']='youShallNotPass';
    echo json_encode($module_arr);
});


$appRest->get('/opportunity(/:id)(/:translate)', function ($id = null, $translate) use ($appRest) {
    global $sugar_config, $current_user;
    $opportunityBean = BeanFactory::getBean('Opportunities');

    if (isset($id)) {
        $opportunity = $opportunityBean->retrieve($id);
        $module_arr = array();

        if ($opportunity->id && $opportunity->ACLAccess('view')) {
            $all_fields = $opportunity->column_fields;
            $docNumber=0;
            $opportunity->load_relationship('accounts');
            foreach ($opportunity->accounts->getBeans(new Account())  as $account) {
                $opportunity->account_name = $account->name;
                $opportunity->account_id = $account->id;
                $opportunity->account_soldto =$account->soldto_c;
            }
            $opportunity->load_relationship('documents');
            foreach ($opportunity->documents->getBeans(new Document())  as $document) {
                $doc=array(
                    'document_name' => $document->document_name,
                    'document_id' => $document->id,
                    'document_file' => $document->file_url_noimage
                );
                $docs[]=$doc;

                $docNumber++;
            }
            if (isset($docs)) {
                $opportunity->documents=$docs;
            }
            $all_fields[]='documents';

            $opportunity->load_relationship('notes');
            $noteNumber=0;
            foreach ($opportunity->notes->getBeans(new Note())  as $note) {
                foreach ($note->column_fields as $field) {
                    if (isset($note->$field) && !is_object($note->$field)) {
                        if (is_string($note->$field)) {
                            $note->$field = from_html($note->$field);
                            $note->$field = preg_replace("/\r\n/", "<BR>", $note->$field);
                            $note->$field = preg_replace("/\n/", "<BR>", $note->$field);
                        }
                        $noteArray[$field] = $note->$field;
                    }
                }
                $notes[]=$noteArray;
                $noteNumber++;
            }
            if (isset($notes)) {
                $opportunity->notes=$notes;
            }
            $all_fields[]='notes';

            foreach ($all_fields as $field) {
                if (isset($opportunity->$field) && !is_object($opportunity->$field)) {
                    if (is_string($opportunity->$field)) {
                        $opportunity->$field = from_html($opportunity->$field);
                        $opportunity->$field = preg_replace("/\r\n/", "<BR>", $opportunity->$field);
                        $opportunity->$field = preg_replace("/\n/", "<BR>", $opportunity->$field);
                    }
                    if (isset($translate)
                        && !empty($opportunity->$field) && isset($opportunity->field_defs[$field]['options'])
                        && $opportunity->field_defs[$field]['options']!='date_range_search_dom'
                        && $opportunity->field_defs[$field]['options']!='numeric_range_search_dom') {
                        $displayFieldValue = $GLOBALS['app_list_strings'][$opportunity->field_defs[$field]['options']][$opportunity->$field];
                        $field_hidden=$field . "_hidden";
                        $opportunity->$field_hidden=$opportunity->$field;

                        $opportunity->$field=$displayFieldValue;
                    }
                    if (isset($field_hidden)) {
                        $module_arr['opportunity'][$field_hidden] = $opportunity->$field_hidden;
                        unset($field_hidden);
                    }
                    $module_arr['opportunity'][$field] = $opportunity->$field;
                }
            }
            echo json_encode($module_arr);
        } else {
            $appRest->halt(403, json_encode('You shall not pass!'));
        }
    } else {
        $appRest->halt(404, json_encode('Missing Parameters'));
    }
});
$appRest->put('/opportunity/:id', function ($id = null) use ($appRest) {
    //Change the Status
    global $sugar_config, $current_user, $db;
    $opportunityBean = BeanFactory::getBean('Opportunities');

    if (isset($id)) {
        $opportunity = $opportunityBean->retrieve($id);
        $parsedBody = $appRest->request->getBody();
        $parsedBody = json_decode($parsedBody);

        if ($opportunity->id && $opportunity->ACLAccess('edit')) {
            if (isset($parsedBody->data->sales_stage) && !empty($parsedBody->data->sales_stage)) {
                $opportunity->sales_stage= $db->quote($parsedBody->data->sales_stage);
                $opportunity->save();
            }
            if (isset($parsedBody->data->htok) && !empty($parsedBody->data->htok)) {
                $opportunity->htok_c = $parsedBody->data->htok;
                $opportunity->save();
            }
            if (isset($parsedBody->data->reason) && !empty($parsedBody->data->reason)) {
                $opportunity->htrechazada_c = $parsedBody->data->reason;
                $opportunity->save();
            }
            if (isset($parsedBody->data->provider) && !empty($parsedBody->data->provider)) {
                error_log(print_r($parsedBody->data->provider, 1));
                $p=$parsedBody->data->provider;
                $providerId_Field='provider'.$p->providerIndex.'id_c';
                $providerStatus_Field='provider'.$p->providerIndex.'status_c';
                $providerDate_Field='provider'.$p->providerIndex.'date_c';
                $providerEta_Field='provider'.$p->providerIndex.'etadate_c';
                $providerCom_Field='provider'.$p->providerIndex.'com_c';
                $providerTracking_Field='provider'.$p->providerIndex.'tracking_c';
                $providerDescription_Field='provider'.$p->providerIndex.'description_c';
                $date = new \DateTime($p->providerDate);
                $p->providerDate= $date->format('Y-m-d');
                $date = new \DateTime($p->providerEta);
                $p->providerEta= $date->format('Y-m-d');
                $opportunity->$providerId_Field=$p->providerId;
                $opportunity->$providerStatus_Field=$p->providerStatus;
                $opportunity->$providerDate_Field=$p->providerDate;
                $opportunity->$providerEta_Field=$p->providerEta;
                $opportunity->$providerCom_Field=$p->providerCom;
                $opportunity->$providerTracking_Field=$p->providerTracking;
                $opportunity->$providerDescription_Field=$p->providerDescription;
                $opportunity->save();
            }
            if (isset($parsedBody->data->invoices) && !empty($parsedBody->data->invoices)) {
                $opportunity->invoices_c = $parsedBody->data->invoices;
                $opportunity->save();
            }
            if (isset($parsedBody->data->invoices_json) && !empty($parsedBody->data->invoices_json)) {
                $opportunity->invoicesjson_c = $parsedBody->data->invoices_json;
                $opportunity->save();
            }
        }
    }
});


$appRest->post('/reports/summary', function () use ($appRest) {
    global $sugar_config, $current_user, $db;
    $parsedBody = $appRest->request->getBody();
    $parsedBody=json_decode($parsedBody);
    $query['casesBySubTopic']="";
    $query['reportGeneral']="";
    $query['summaryByTopic']='
                    SELECT
                        substring_index(cac.asunto_c,"-",1)  AS codigoTopico,
                        substring_index(substring_index(cac.asunto_c,"-",-4),"-",2) AS topicoSubtopico,
                        substring_index(substring_index(cac.asunto_c,"-",-3),"-",2) AS subtopico,
                        substring_index(substring_index(cac.asunto_c,"-",-4),"-",1) AS topico,
                        COUNT( 1 ) as count
                    FROM
                    	calls ca
                    INNER JOIN calls_cstm cac ON
                    	ca.id = cac.id_c
                    LEFT JOIN users u ON
                    	ca.assigned_user_id = u.id
                    LEFT JOIN contacts c ON
                    	c.id = ca.parent_id
                    LEFT JOIN calls_contacts caco ON
                    	caco.call_id = ca.id
                    LEFT JOIN contacts c2 ON
                    	c2.id = caco.contact_id
                    WHERE
			ca.deleted=0
                        AND substring_index(substring_index(cac.asunto_c,"-",-4),"-",1) ?  REGEXP "?"
                        AND substring_index(substring_index(cac.asunto_c,"-",-4),"-",3) ?  REGEXP "?"
                        AND cac.asunto_c ?  REGEXP "?"
                        AND cac.sucursal_c ? REGEXP "?$"
                        AND cac.region_c ? REGEXP "?"
                        AND ca.status ? REGEXP "?"
                        AND (
                            ca.date_entered >= DATE_ADD("? 00:00:00",  INTERVAL -6 HOUR)
                            AND ca.date_entered <= DATE_ADD("? 23:59:59",  INTERVAL -6 HOUR)
                            )
                        GROUP BY
                        	?
    ';
    $query['summaryBySucursal']='
                    SELECT
                    	substring_index(cac.sucursal_c,"-",-1)  AS sucursal_c,
                    	cac.region_c AS region,
                    	COUNT( 1 ) as count
                    FROM calls ca
                    INNER JOIN calls_cstm cac ON
                    	ca.id = cac.id_c
                    LEFT JOIN users u ON
                    	ca.assigned_user_id = u.id
                    LEFT JOIN contacts c ON
                    	c.id = ca.parent_id
                    LEFT JOIN calls_contacts caco ON
                    	caco.call_id = ca.id
                    LEFT JOIN contacts c2 ON
                    	c2.id = caco.contact_id
                    WHERE ca.deleted=0
                    AND substring_index(substring_index(cac.asunto_c,"-",-4),"-",1) ?  REGEXP "?"
                    AND substring_index(substring_index(cac.asunto_c,"-",-4),"-",3) ?  REGEXP "?"
                    AND cac.asunto_c ?  REGEXP "?"
                    AND cac.sucursal_c ? REGEXP "?$"
                    AND cac.region_c ? REGEXP "?"
                    AND ca.status ? REGEXP "?"
                    AND (
                        ca.date_entered >= DATE_ADD("? 00:00:00",  INTERVAL -6 HOUR)
                        AND ca.date_entered <= DATE_ADD("? 23:59:59",  INTERVAL -6 HOUR)
                        )
                    GROUP BY
                    	cac.sucursal_c
    ';
    $query['summaryByAgent']='
                SELECT
                    u.user_name as userName,
                    roles.name as roleName,
                    CONCAT(u.first_name, " ", u.last_name ) as userFullName,
                    ca.status,
                    COUNT( 1 ) as count
                FROM
                    calls ca
                    INNER JOIN calls_cstm cac ON
                    ca.id = cac.id_c
                    LEFT JOIN users u ON
                    ca.assigned_user_id = u.id
                    LEFT JOIN contacts c ON
                    c.id = ca.parent_id
                    LEFT JOIN calls_contacts caco ON
                    caco.call_id = ca.id
                    LEFT JOIN contacts c2 ON
                    c2.id = caco.contact_id
                    LEFT JOIN acl_roles_users aclro ON
                    	aclro.user_id = u.id
                    LEFT JOIN acl_roles roles ON
                    	aclro.role_id = roles.id
                WHERE ca.deleted=0
                    AND substring_index(substring_index(cac.asunto_c,"-",-4),"-",1) ?  REGEXP "?"
                    AND substring_index(substring_index(cac.asunto_c,"-",-4),"-",3) ?  REGEXP "?"
                    AND roles.name ?  REGEXP "?"
                    AND cac.asunto_c ?  REGEXP "?"
                    AND cac.sucursal_c ? REGEXP "?$"
                    AND cac.region_c ? REGEXP "?"
                    AND ca.status ? REGEXP "?"
                    AND (
                        ca.date_entered >= DATE_ADD("? 00:00:00",  INTERVAL -6 HOUR)
                        AND ca.date_entered <= DATE_ADD("? 23:59:59",  INTERVAL -6 HOUR)
                        )
                GROUP BY
                    u.user_name';


    if (isset($parsedBody->reportType) && !empty($parsedBody->start_range_date_entered) && !empty($parsedBody->end_range_date_entered)) {
        switch ($parsedBody->reportType) {
                case 'reportGeneral':
                case 'summaryByTopic':
                    $status=$parsedBody->status ? $parsedBody->status : "(.*)";
                    $operatorStatus=$parsedBody->operatorStatus ? $parsedBody->operatorStatus : "";
                    $operatorSucursal=$parsedBody->operatorSucursal ? $parsedBody->operatorSucursal : "";
                    $sucursal=$parsedBody->sucursal ? $parsedBody->sucursal : "(.*)";
                    $operatorRegion=$parsedBody->operatorRegion ? $parsedBody->operatorRegion : "";
                    $region=$parsedBody->region ? $parsedBody->region : "(.*)";
                    $operatorRoles=$parsedBody->operatorRoles ? $parsedBody->operatorRoles : "";
                    $roles=$parsedBody->roles ? $parsedBody->roles : "(.*)";
                    $asunto=$parsedBody->asunto ? $parsedBody->asunto : "(.*)";
                    $operatorAsunto=$parsedBody->operatorAsunto ? $parsedBody->operatorAsunto : "";
                    $operatorTopics=$parsedBody->operatorTopics ? $parsedBody->operatorTopics : "";
                    $topics=$parsedBody->topics ? $parsedBody->topics : "(.*)";
                    $operatorSubtopics=$parsedBody->operatorSubtopics ? $parsedBody->operatorSubtopics : "";
                    $subtopics=$parsedBody->subtopics ? $parsedBody->subtopics : "(.*)";
                    $groupby=$parsedBody->groupby ? $parsedBody->groupby : "topicoSubtopico";
                    $preparedStatementData=array(
                        $operatorTopics,
                        $topics,
                        $operatorSubtopics,
                        $subtopics,
                        $operatorAsunto,
                        $asunto,
                        $operatorSucursal,
                        $sucursal,
                        $operatorRegion,
                        $region,
                        $operatorStatus,
                        $status,
                        $parsedBody->start_range_date_entered,
                        $parsedBody->end_range_date_entered,
                        $groupby
                    );
                    $result=$db->pQuery($query['summaryByTopic'], $preparedStatementData);
                    $resultArray = array();
                    if (!$result) {
                        echo json_encode(["result"=>"empty summaryByTopic"]);
                    }
                    while ($row=$db->fetchByAssoc($result)) {
                        $resultArray[]=$row;
                    }
                    echo json_encode($resultArray);
                    break;
                case 'summaryBySucursal':
                    $status=$parsedBody->status ? $parsedBody->status : "(.*)";
                    $operatorStatus=$parsedBody->operatorStatus ? $parsedBody->operatorStatus : "";
                    $operatorSucursal=$parsedBody->operatorSucursal ? $parsedBody->operatorSucursal : "";
                    $sucursal=$parsedBody->sucursal ? $parsedBody->sucursal : "(.*)";
                    $operatorRegion=$parsedBody->operatorRegion ? $parsedBody->operatorRegion : "";
                    $region=$parsedBody->region ? $parsedBody->region : "(.*)";
                    $operatorRoles=$parsedBody->operatorRoles ? $parsedBody->operatorRoles : "";
                    $roles=$parsedBody->roles ? $parsedBody->roles : "(.*)";
                    $asunto=$parsedBody->asunto ? $parsedBody->asunto : "(.*)";
                    $operatorAsunto=$parsedBody->operatorAsunto ? $parsedBody->operatorAsunto : "";
                    $operatorTopics=$parsedBody->operatorTopics ? $parsedBody->operatorTopics : "";
                    $topics=$parsedBody->topics ? $parsedBody->topics : "(.*)";
                    $operatorSubtopics=$parsedBody->operatorSubtopics ? $parsedBody->operatorSubtopics : "";
                    $subtopics=$parsedBody->subtopics ? $parsedBody->subtopics : "(.*)";
                    $preparedStatementData=array(
                        $operatorTopics,
                        $topics,
                        $operatorSubtopics,
                        $subtopics,
                        $operatorAsunto,
                        $asunto,
                        $operatorSucursal,
                        $sucursal,
                        $operatorRegion,
                        $region,
                        $operatorStatus,
                        $status,
                        $parsedBody->start_range_date_entered,
                        $parsedBody->end_range_date_entered
                    );
                    $result=$db->pQuery($query['summaryBySucursal'], $preparedStatementData);
                    $resultArray = array();
                    if (!$result) {
                        echo json_encode(["result"=>"empty summaryBySucursal"]);
                    }
                    while ($row=$db->fetchByAssoc($result)) {
                        $resultArray[]=$row;
                    }
                    echo json_encode($resultArray);
                    break;
                case 'summaryByAgent':
                    //Queries for call status using REGEXP or (operator) REGEXP
                    $operatorStatus=$parsedBody->operatorStatus ? $parsedBody->operatorStatus : "";
                    $status=$parsedBody->status ? $parsedBody->status : "(.*)";
                    $operatorSucursal=$parsedBody->operatorSucursal ? $parsedBody->operatorSucursal : "";
                    $sucursal=$parsedBody->sucursal ? $parsedBody->sucursal : "(.*)";
                    $operatorRegion=$parsedBody->operatorRegion ? $parsedBody->operatorRegion : "";
                    $region=$parsedBody->region ? $parsedBody->region : "(.*)";
                    $operatorRoles=$parsedBody->operatorRoles ? $parsedBody->operatorRoles : "";
                    $roles=$parsedBody->roles ? $parsedBody->roles : "(.*)";
                    $operatorAsunto=$parsedBody->operatorAsunto ? $parsedBody->operatorAsunto : "";
                    $asunto=$parsedBody->asunto ? $parsedBody->asunto : "(.*)";
                    $operatorTopics=$parsedBody->operatorTopics ? $parsedBody->operatorTopics : "";
                    $topics=$parsedBody->topics ? $parsedBody->topics : "(.*)";
                    $operatorSubtopics=$parsedBody->operatorSubtopics ? $parsedBody->operatorSubtopics : "";
                    $subtopics=$parsedBody->subtopics ? $parsedBody->subtopics : "(.*)";
                    $preparedStatementData=array(
                        $operatorTopics,
                        $topics,
                        $operatorSubtopics,
                        $subtopics,
                        $operatorRoles,
                        $roles,
                        $operatorAsunto,
                        $asunto,
                        $operatorSucursal,
                        $sucursal,
                        $operatorRegion,
                        $region,
                        $operatorStatus,
                        $status,
                        $parsedBody->start_range_date_entered,
                        $parsedBody->end_range_date_entered
                   );
                    $result=$db->pQuery($query['summaryByAgent'], $preparedStatementData);
                    $resultArray = array();
                    if (!$result) {
                        echo json_encode(["result"=>"empty summaryByAgent"]);
                    }
                    while ($row=$db->fetchByAssoc($result)) {
                        $resultArray[]=$row;
                    }
                    echo json_encode($resultArray);
                break;
                default:
                $status=$parsedBody->status ? $parsedBody->status : "(.*)";
                $operatorStatus=$parsedBody->operatorStatus ? $parsedBody->operatorStatus : "";
                $operatorSucursal=$parsedBody->operatorSucursal ? $parsedBody->operatorSucursal : "";
                $sucursal=$parsedBody->sucursal ? $parsedBody->sucursal : "(.*)";
                $operatorRegion=$parsedBody->operatorRegion ? $parsedBody->operatorRegion : "";
                $region=$parsedBody->region ? $parsedBody->region : "(.*)";
                $operatorRoles=$parsedBody->operatorRoles ? $parsedBody->operatorRoles : "";
                $roles=$parsedBody->roles ? $parsedBody->roles : "(.*)";
                $asunto=$parsedBody->asunto ? $parsedBody->asunto : "(.*)";
                $operatorAsunto=$parsedBody->operatorAsunto ? $parsedBody->operatorAsunto : "";
                $operatorTopics=$parsedBody->operatorTopics ? $parsedBody->operatorTopics : "";
                $topics=$parsedBody->topics ? $parsedBody->topics : "(.*)";
                $operatorSubtopics=$parsedBody->operatorSubtopics ? $parsedBody->operatorSubtopics : "";
                $subtopics=$parsedBody->subtopics ? $parsedBody->subtopics : "(.*)";
                $preparedStatementData=array(
                    $operatorTopics,
                    $topics,
                    $operatorSubtopics,
                    $subtopics,
                    $operatorRoles,
                    $roles,
                    $operatorAsunto,
                    $asunto,
                    $operatorSucursal,
                    $sucursal,
                    $operatorRegion,
                    $region,
                    $operatorStatus,
                    $status,
                    $parsedBody->start_range_date_entered,
                    $parsedBody->end_range_date_entered
                );
                $result=$db->pQuery($query['summaryBySucursal'], $preparedStatementData);
                $resultArray = array();
                while ($row=$db->fetchByAssoc($result)) {
                    $resultArray[]=$row;
                }
                $resultAll['summaryBySucursal']=$resultArray;
                $result=$db->pQuery($query['summaryByAgent'], $preparedStatementData);
                $resultArray = array();
                while ($row=$db->fetchByAssoc($result)) {
                    $resultArray[]=$row;
                }
                $resultAll['summaryByAgent']=$resultArray;
                $result=$db->pQuery($query['summaryByTopic'], $preparedStatementData);
                $resultArray = array();
                while ($row=$db->fetchByAssoc($result)) {
                    $resultArray[]=$row;
                }
                $resultAll['summaryByTopic']=$resultArray;
                echo json_encode($resultAll);
                break;
            }
    } else {
        echo json_encode(["result"=>"empty - not even tried"]);
    }
});

$appRest->post('/search/opportunities', function () use ($appRest) {
    global $sugar_config, $current_user, $db;
    $opportunityBean = BeanFactory::getBean('Opportunities');
    $query="";
    $parsedBody = $appRest->request->getBody();
    $parsedBody=json_decode($parsedBody);
    $operator=" LIKE ";
    if (isset($parsedBody->data->sales_stage) && !empty($parsedBody->data->sales_stage)) {
        $stage = is_array($parsedBody->data->sales_stage) ? $parsedBody->data->sales_stage : '"'.$db->quote($parsedBody->data->sales_stage).'"' ;
        if (is_array($stage)) {
            $operator=" IN ";
            $stage=join('","', $stage);
            $stage='("'.$stage.'")';
        }
    }
    if (isset($parsedBody->data->to) && !empty($parsedBody->data->to)) {
        $to = $db->quote($parsedBody->data->to);
    }
    if (isset($parsedBody->data->from) && !empty($parsedBody->data->from)) {
        $from = $db->quote($parsedBody->data->from);
    }
    if (isset($parsedBody->data->translate) && !empty($parsedBody->data->translate)) {
        $translate = $db->quote($parsedBody->data->translate);
    }
    if (!empty($stage)) {
        if ($stage=='all') {
            $stage='%';
        }
        $query='opportunities.sales_stage '.$operator.' '.$stage.' ';
        if (validateDate($from, 'Ymd') && validateDate($to, 'Ymd')) {
            $query='opportunities.sales_stage '.$operator.'  '.$stage.' AND opportunities.date_entered> "'.$from .'" AND opportunities.date_entered < "' . $to . '"';
        }
    }
    $list = $opportunityBean->get_list('opportunities.date_entered', $query);
    $resultArray = [];
    //Used to rename files

    if (is_array($list) && !empty($list)) {
        foreach ($list['list'] as $opportunity) {
            $docNumber=0;
            if ($opportunity->ACLAccess('list')) {
                if ($opportunity->id && $opportunity->ACLAccess('view')) {
                    $opportunity->load_relationship('accounts');
                    foreach ($opportunity->accounts->getBeans(new Account())  as $account) {
                        $opportunity->account_name = $account->name;
                        $opportunity->account_id = $account->id;
                        //TODO -> Non Upgrade Safe personalization - remove
                        $opportunity->account_soldto =$account->soldto_c;
                    }
                    $all_fields = $opportunity->column_fields;
                    $all_fields[]='account_soldto';
                    $opportunity->load_relationship('documents');
                    foreach ($opportunity->documents->getBeans(new Document())  as $document) {
                        $doc=array(
                            'document_name' => $document->document_name,
                            'document_id' => $document->id,
                            'document_file' => $document->file_url_noimage
                        );
                        $docs[]=$doc;

                        $docNumber++;
                    }
                    if (isset($docs)) {
                        $opportunity->documents=$docs;
                    }
                    $all_fields[]='documents';

                    $opportunity->load_relationship('notes');
                    $noteNumber=0;
                    foreach ($opportunity->notes->getBeans(new Note())  as $note) {
                        foreach ($note->column_fields as $field) {
                            if (isset($note->$field) && !is_object($note->$field)) {
                                if (is_string($note->$field)) {
                                    $note->$field = from_html($note->$field);
                                    $note->$field = preg_replace("/\r\n/", "<BR>", $note->$field);
                                    $note->$field = preg_replace("/\n/", "<BR>", $note->$field);
                                }
                                $noteArray[$field] = $note->$field;
                            }
/*
*/
                        }
                        $notes[]=$noteArray;
                        $noteNumber++;
                    }
                    if (isset($notes)) {
                        $opportunity->notes=$notes;
                    }
                    $all_fields[]='notes';

                    foreach ($all_fields as $field) {
                        if (isset($opportunity->$field) && !is_object($opportunity->$field)) {
                            //                            error_log(print_r($opportunity->field_defs[$field][options],1));
                            if (is_string($opportunity->$field)) {
                                $opportunity->$field = from_html($opportunity->$field);
                                $opportunity->$field = preg_replace("/\r\n/", "<BR>", $opportunity->$field);
                                $opportunity->$field = preg_replace("/\n/", "<BR>", $opportunity->$field);
                            }
                            if (isset($translate)
                                && !empty($opportunity->$field) && isset($opportunity->field_defs[$field]['options'])
                                && $opportunity->field_defs[$field]['options']!='date_range_search_dom'
                            && $opportunity->field_defs[$field]['options']!='numeric_range_search_dom') {
                                $displayFieldValue = $GLOBALS['app_list_strings'][$opportunity->field_defs[$field]['options']][$opportunity->$field];
                                $field_hidden=$field . "_hidden";
                                $opportunity->$field_hidden=$opportunity->$field;

                                $opportunity->$field=$displayFieldValue;
                            }
                            if (isset($field_hidden)) {
                                $module_arr['opportunity'][$field_hidden] = $opportunity->$field_hidden;
                                unset($field_hidden);
                            }
                            $module_arr['opportunity'][$field] = $opportunity->$field;
                        }
                    }

                    $resultArray[]=$module_arr;
                    $module_arr=[];
                }
            } else {
                $appRest->halt(403, json_encode('You shall not pass!'));
            }
        }
        echo json_encode($resultArray);
    }
});

// $productsBean = BeanFactory::getBean('AOS_Products');
// $products = $productsBean->get_full_list('',"name = 'Something' AND choix_loc = 'SomethingElse'");
// if ( $products != null ) {
//     foreach ($products as $product) {
//         $productquotesBean = BeanFactory::getBean('AOS_Products_Quotes');
//         $productquotesBean->name = $product->name;
//         $productquotesBean->description = $product->description;
//         $productquotesBean->product_list_price = $product->price;
//         $productquotesBean->product_id = $product->id;
//         $productquotesBean->save();
//     }
// }
// These permissions apply to the current record itself
//if ( $bean->ACLAccess('edit') ) {
//    echo "User can edit this record";
//} elseif ( $bean->ACLAccess('view') ) {
//    echo "User can view this record in the DetailView";
//} elseif ( $bean->ACLAccess('delete') ) {
//    echo "User can delete this record";
//} elseif ( $bean->ACLAccess('export') ) {
//    echo "User can export this record";
//// These permissions apply to the module as a whole
//} elseif ( $bean->ACLAccess('import') ) {
//    echo "User can import records into the module";
//} elseif ( $bean->ACLAccess('list') ) {
//    echo "User can see this record in the ListView or Dashlet ListView";
//} elseif ( $bean->ACLAccess('massupdate') ) {
//    echo "User update records in the module via Mass Update";
//}

$appRest->run();
