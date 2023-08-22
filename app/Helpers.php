<?php


function checkpermission($uid, $modalname, $method)
{
    // dd($modalname);
    // dd($method);
    $roleId = DB::table('users')->where('id', $uid)->pluck('role_id');
    $modelId = DB::table('permissions_models')->where('model_name', $modalname)->pluck('id');

    $permision = DB::table('permissions')
        ->where('role_id', $roleId)
        ->where('model_id', $modelId)
        ->where($method, 'Y')
        ->get();
    // dd($permision);
    if (empty($permision[0])) {
        return false;
    } else {
        return true;
    }
}


function allUpper($str)
{
    return strtoupper($str);
}
