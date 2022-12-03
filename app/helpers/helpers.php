<?php
use Illuminate\Support\Facades\DB;

function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}
function getAfeild($field,$table,$cond)
{

    // $query="SELECT $field FROM $table  $cond";
    // $filldata=DB::select($query);

  $result = DB::table($table)->where($cond)->value($field);
  return $result;
}

function LoadCombo($TName,$FiledCodeName,$FieldDescName,$SelectCode,$Cond,$ordby)
{
    $sql="SELECT ". $FiledCodeName. "," .$FieldDescName ." from ". $TName . " ". $Cond." ".$ordby;
    $query = DB::select($sql);

    foreach($query as $row)
        {
            $id= $row->$FiledCodeName;
            $value= $row->$FieldDescName;

            if($id==$SelectCode)
            {
                print("<option value=$id selected=selected>$value</option>");
            }
            else {
                print("<option value=$id >$value</option>");
            }
        }
}

function zip_file($main_directory="uploads",$zipFileName="",$full_file_path="",$file_name)
{

    $public_dir=public_path().'/'.$main_directory;
    $zip = new \ZipArchive();
    $dst_file = $full_file_path;

    if ($zip->open($public_dir . '/DST/' . $zipFileName, \ZipArchive::CREATE) === TRUE) {
        $zip->addFile(public_path($dst_file), $file_name);
        $zip->close();
        }
        $headers = array(
        'Content-Type' => 'application/octet-stream',
        );
        $filetopath=$public_dir.'/DST/'.$zipFileName;
        if(file_exists($filetopath)){
        $res=  response()->download($filetopath,$zipFileName,$headers);
        $path =url("$main_directory/DST/$zipFileName");
        return $path;
        }
}
