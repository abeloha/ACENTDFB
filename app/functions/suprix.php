<?php
use App\Http\Requests;
use Illuminate\Http\Request;

//$lastId = DB::table('group_member')->insertGetId(["user_id"=> $user_id,"group_id"=>$id]);
//(Input::old('title'))? Input::old('title'): ''          
function my_encode($input)
{
    return base64_encode($input);
}
function my_decode($input)
{
    return base64_decode($input);
}
function my_substring($string, $lenght){
    if (strlen($string) > $lenght)
        $string = substr($string, 0, $lenght-5).'...';
    return $string;
}

function get_id(){
    return 0;
    return Auth::user()->id;
}

function get_fields(){
    $data = DB::select('select * from field where is_deleted = 0');
    return $data;
}

function get_category(){
    $data = DB::select('select * from category where is_deleted = 0');
    return $data;
}


?>
