<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Homepage</title>
</head>

<body>

    <?php include 'pages/header/header.php' ?>
    <?php include 'pages/browse/browse.php'?>
    <?php include 'pages/browse/list-games.php'?>
    <?php include 'pages/discover/discover.php'?>
    <?php include 'pages/news/news.php' ?>
    <div id="contact_us"><?php include 'pages/contact_us/contact.php'?></div>

    <div class="modal fade" id="gameModal1" tabindex="-1" aria-labelledby="gameModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gameModalLabel">Game Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display game information here -->
                    <div id="gameInfo"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modal_close()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function showPage(page) {
        // Hide all pages
        document.querySelector('.page1').style.display = 'none';
        document.querySelector('.page2').style.display = 'none';
        document.querySelector('.page3').style.display = 'none';

        // Show the selected page
        document.querySelector('.' + page).style.display = 'block';

        // Update active state in pagination
        document.getElementById('page1-link').classList.remove('active');
        document.getElementById('page2-link').classList.remove('active');
        document.getElementById('page3-link').classList.remove('active');
        document.getElementById(page + '-link').classList.add('active');
    }
    function modal_close(){
        $('#gameModal1').modal('hide')
    }
    function displayGameInfo(gameName, price,src) {
        $('#gameModal1').modal('toggle')
    // Get the modal body element
    var modalBody = document.getElementById('gameInfo');
        
    // Create HTML content for game information
    var content = `
      <div class="row">
        <div class="col-md-5">
          <img src="${src}" width="200" class="img-fluid mb-3" alt="${gameName}">
        </div>
        <div class="col-md-6">
          <h6 class="mb-2">${gameName}</h6>
          <p>Price: &#8369;${price}</p>
          <div class="mt-2">
            <p class="mb-0">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan, est eget fermentum hendrerit, tortor ligula varius orci, eu bibendum justo dolor vel purus.</p>
          </div>
          <div class="mt-3">
            <a href="#checkout.php"><button class="btn btn-primary">Checkout</button></a>
          </div>
        </div>
      </div>
    `;

    // Set the content to the modal body
    modalBody.innerHTML = content;
  }
    $('.btn-success').click(function() {
        var title = $(this).data('title');
        var description = $(this).data('description');
        var VideoSrc = $(this).data('src');


        // Set the modal content
        $('#modalTitle').text(title);
        $('#modalDescription').text(description);
        $('#modalVideo').attr('src', VideoSrc);

        // Pause video when modal is closed
        $('#gameModal').on('hidden.bs.modal', function(e) {
            $('#modalVideo').trigger('pause');
        });

    });

    function openModalBtn() {
        $('#loginModal').modal('toggle');
        console.log('test')
    }

    function login() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Replace this with your actual login logic
        alert(`Logging in as ${username}`);
        // Optionally, you can close the modal after successful login
        $('#loginModal').modal('hide');
    }

    function toggleDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>
    <!-- The Modal -->

</body>

</html>