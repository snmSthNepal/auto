<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

<script>
    $(document).ready(function(){
        //Search the page
        $("#filter").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#eR tr, #sR tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<!--Script for PopUp Form to reply Evaluate-->
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    $('.com').on('click', function(event){
        event.preventDefault();
        console.log('complete button clicked');
        $(".myForm2").removeClass('hide');
        $('.finishBtn').click(function(){
            var txt;
            if (confirm("Are you Sure?")){
                txt = "";
            }else{
                e.preventDefault();
            }
            $('#replyForm').submit();
        });
    });

    $('.cancel').click(function(){
        $('#myForm2').addClass('hide');
    });
    
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>

<script>//script for replying Evaluatin Request
    $('.reply').click(function(event){
        //Splitting the value of the clicked button for email and userID
        $data = $(this).val();
        var split = $data.split(" ");
        $email = split[0];
        $userID = split[1];
        $evaluateID = split[2];
        $name = split[3];

        $('#replyEmail').val($email);
        $('#userID').val($userID);
        $('#evaluateID').val($evaluateID);
        $('#name').val($name);
    });
</script>

<script>
    //Confirm Servicing Buttons Action
    $('.reject, .accept, .cancel' ).click(function(e){
        var txt;
        if (confirm("Are you Sure?")){
            txt = "";
        }else{
            e.preventDefault();
        }
    });



    //Function to show a Quota Form for Servicing capacity
    $('#quotaBtn').click(function(){
        $('#totalQuotaForm').removeClass('hide');
        $('#bookingQuotaForm').removeClass('hide');
    });
</script>
