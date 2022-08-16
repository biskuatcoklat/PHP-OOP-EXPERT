<?php
function validateloginrequest(loginrequest $request)
{
    if (!isset($request->username)) {
        throw new validationexeception("username is null");
    } else if (!isset($request->password)) {
        throw new validationexeception("password is null");
    } else if (trim($request->username)) {
        throw new Exception("username  is empty");
    } else if (trim($request->password)) {
        throw new Exception("password  is empty");
    }
}
