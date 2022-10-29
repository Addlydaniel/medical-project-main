<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use App\Models\Wireman;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'username' => 'required', 
            'password' => 'required', 
             ]);
             if ($validator->fails()) {
             
                return redirect()->back()->withErrors($validator)->withInput();
                      }
     
          else{
                $credentials = $request->only('username', 'password');
                session(['username' => $request['username']]);
               
                if (Auth::attempt($credentials)) {
                   
                    $wireman=Wireman::where('wiremanName',$request['username'])->first();
                    
                if( $wireman==null){
                    return redirect('dashboard');
                }
                    elseif($wireman->wiremanName==$request['username']){
                        return redirect('viewApplication')->with('wireman',$wireman);
                    }
                    else{
                        return redirect('dashboard');
                    }
                    
                }
                else{
                    return redirect("/")->withErrors('Oppes! You have entered invalid credentials')->withInput();
                }
     
       
      }
      
  
      
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'email|unique:users',
            'phonenumber' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
           if($request['password']==$request['cpassword']){
            $data = $request->all();
           
            $check = $this->create($data);
            return redirect("/")->withSuccess('message','Great! You have Successfully loggedin');
           }
           else{
            return redirect("registration")->withErrors('message','Oppes! Password and Confirm Password Not Match')->withInput();
           }
      
         
       
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("/")->withSuccess('Opps! You do not have access');
    }
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
     
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'phonenumber' => $data['phonenumber'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}