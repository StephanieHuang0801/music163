<?php
header("Content-Type: text/plain;charset=utf-8"); 
//下面这两行解决跨域
header( "Access-Control-Allow-Origin:*" );
header( "Access-Control-Allow-Methods:POST,GET" );


function query(){
    $data=file_get_contents('./data.json');//这里需要替换成网址
    echo $data;
    // $songs=json_decode($data,true);
    // echo $songs;

}
// function add(){
//     // if(empty($_POST['name'])){
//     //     $result="请输入姓名";
//     //     echo $result;
//     //     return;
//     // }
//     // if(empty($_POST['number'])){
//     //     $result="请输入编号";
//     //     echo $result;
//     //     return;
//     // }
//     // if(empty($_POST['gender'])){
//     //     $result="请输入性别";
//     //     echo $result;
//     //     return;
//     // }
//     // if(empty($_POST['position'])){
//     //     $result="请输入职位";
//     //     echo $result;
//     //     return;
//     // }

//     $newSong={
//         'mytitle'=>$_POST['mytitle'],
//         'mytime'=>$_POST['mytime'],
//         'mysinger'=>$_POST['mysinger'],
//         'myalbum'=>$_POST['myalbum']

//     };
//     $data=file_get_contents('./data.json');//对象数组$data[{},{}]
//     $song=json_decode($data,true);//1

//     // $staff[]=$newStaff;//源代码
//     // $dataNew=json_encode($staff);//源代码
//     // file_put_contents('data.json',$dataNew);//源代码

//     $data.push($newSong);//我的代码2
//     echo $data;//3


//     // $result="保存成功！员工姓名：".$_POST['name']." 编号:".$_POST['number']." 性别:".($_POST['gender']=='female'?"女":"男")." 职位:".$_POST['position'];
//    // $result=$_POST['gender']=="male"?"男":"女";
// }


//进行查询
if($_SERVER['REQUEST_METHOD']=='GET'){
    query();
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    add();
}





?>