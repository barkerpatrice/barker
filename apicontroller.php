<?php

class APIController
{
  	public function internalGetUser(Request $request)
    	{
        	if (!strcmp($request->header('X-Barker-Key'), 'VgMo7FccKMsCFnc4ZWemBAAUAr4kDFCs'))
        	{
            		$response = '';

            		foreach(User::all() as $user)
			{
		                $response .= $user->toJson();
           		}

            		return response($response);
	        }
        	else
	        {
        	    return response()->json(['error' => 'Invalid key'], 403)->header('X-Barker-Key', '');
	        }
	}
}

