setInterval(time,1000);

function time(){
 var dt=new Date();
 var hour=dt.getHours();
 var minute=dt.getMinutes();
 var second=dt.getSeconds();

 //console.log(second);
 if (hour<10){
    my$("img1").src="shuzi/0.png";
    my$("img2").src="shuzi/"+hour+".png";
}else{       
    my$("img1").src="shuzi/"+parseInt(hour/10)+".png";
    my$("img2").src="shuzi/"+hour%10+".png";
}
if(minute<10){
    my$("img4").src="shuzi/0.png";
    my$("img5").src="shuzi/"+minute+".png";
}else{
    my$("img4").src="shuzi/"+parseInt(minute/10)+".png";
    my$("img5").src="shuzi/"+minute%10+".png";
}
if(second<10&&second>0){ //01 02 03 04 05 06 07 08 09
    my$("img7").src="shuzi/0.png";
    my$("img8").src="shuzi/"+second+".png";
}
else{ //10 11 12 59
    my$("img7").src="shuzi/"+parseInt(second/10)+".png";
    my$("img8").src="shuzi/"+second%10+".png";

}
console.log(dt);


}









