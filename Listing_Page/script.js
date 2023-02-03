//  https://www.youtube.com/watch?v=ydGH0cz14LE&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR&index=33
button=document.getElementsByClassName("value");
Array.from(button).forEach((element)=>{
    element.addEventListener("click",(e)=>{
        tr=e.target.parentNode.parentNode.parentNode;
        customerid=tr.getElementsByTagName("td")[0].innerText;
        var cookievalue=customerid+";";
        document.cookie="customer="+cookievalue+"path=/";
    })
})

