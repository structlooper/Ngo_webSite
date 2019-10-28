
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>

<script type="text/javascript">
        $(function (){
            $("#idchk").change( function () {
                var st = this.checked;
                if (st){
                    $("#idtxt").prop("disabled", false);

                }
                else{
                    $("#idtext").prop("disabled", true);
                }
            });

            
        });
        
        
</script>