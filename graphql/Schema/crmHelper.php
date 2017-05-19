<?php
class crmHelper{
    /* This saveBean is an adapted copy of the set_entry sugar rest/soap service
*/
public function saveBean($module_name, $class_name, $name_value_list){


    global  $beanList, $beanFiles, $current_user;
    // $module_name="Calls";
    // $class_name = $beanList[$module_name];
    // $class_name="Call";
    // require_once $beanFiles[$class_name];
    $seed = new $class_name();
    // $name_value_list=$args;
    foreach ($name_value_list as $name => $value) {
        if (is_array($value) &&  $value['name'] == 'id') {
            $seed->retrieve($value['value']);
            break;
        } elseif ($name === 'id') {
            $seed->retrieve($value);
        }
    }
    foreach ($name_value_list as $name => $value) {
        if ($module_name == 'Users' && !empty($seed->id) && ($seed->id != $current_user->id) && $name == 'user_hash') {
            continue;
        }
        if (!empty($seed->field_name_map[$name]['sensitive'])) {
            continue;
        }
        if($name=="related_bean"){
            $seed->new_rel_relname=$value;
        }
        if($name=="related_beans"){
            $related_beans=$value;
        }
        if($name=="related_id"){
            $seed->new_rel_id=$value;
        }
        if (!is_array($value)) {
            $seed->$name = $value;
        } elseif ($name!="related_beans") {
            $seed->$value['name'] = $value['value'];
        }

    }


    if ($seed->ACLAccess('Save')) {
        $seed->not_use_rel_in_req=true;
        $seed->save();
        if ($seed->deleted == 1) {
            $seed->mark_deleted($seed->id);
        }
        if(isset($related_beans)){
            foreach ($related_beans as $key => $value) {
                if($class_name=="Call" && isset($value['module']) && strtolower($value['module'])=="notes"){
                    $note= new Note();
                    $note->retrieve($value['id']);
                    if(!empty($note->id)){
                        $note->load_relationship('calls');
                        $note->calls->add($seed->id);
                    }
                }else{
                    $relatedModule=strtolower($value['module']);
                    $seed->load_relationship($relatedModule);
                    $seed->$relatedModule->add($value['id']);
                }
            }
        }
        return array('id' => $seed->id);

    }else{
        error_log(__METHOD__." ERROR SAVING");
        return "ERROR SAVING";
    }
    }
}
