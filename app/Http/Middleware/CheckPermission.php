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
        $user = Auth::user();
        $status = array_get($user, 'status', 1);
        if($status == 1){
            $redirect = "/account/register/".array_get($user, 'wip_id');
            return $request->ajax ? response('Unauthorized.', 401) : redirect($redirect);
        }

        if (isset($user)) {
            return $user? $next($request) : redirect('access/denie');
        }
        return $request->ajax ? response('Unauthorized.', 401) : redirect('/auth/login');
    }

}
