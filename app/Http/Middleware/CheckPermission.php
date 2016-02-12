<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
use App\User;
use App\models\Role;
class CheckPermission
{
    public function handle($request, Closure $next, $permission = null)
    {
        $uid = Auth::id();
        //echo $uid;
        
         $ctrl = $request->segment(1);
         $action = $request->segment(2);
        //echo $ctrl;
        //echo $action;
        //echo "CHECK";
        //die();
        
        if (isset($uid)) {
            return $value_cache? $next($request) : redirect('access/denie');
        }
        return $request->ajax ? response('Unauthorized.', 401) : redirect('/auth/login');
    }
    
}
