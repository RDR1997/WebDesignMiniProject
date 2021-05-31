<script >
    function valid()
    {
        if(document.chngpwd.opwd.value=="")
    {
        alert("Old Password Filed is Empty !!");
        document.chngpwd.opwd.focus();
        return false;
    }
        else if(document.chngpwd.npwd.value=="")
    {
        alert("New Password Filed is Empty !!");
        document.chngpwd.npwd.focus();
        return false;
    }
        else if(document.chngpwd.cpwd.value=="")
    {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.cpwd.focus();
        return false;
    }
        else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
    {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cpwd.focus();
        return false;
    }
        return true;
    }
</script>