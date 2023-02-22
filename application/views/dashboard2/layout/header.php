<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eresta Dev</title>
    <link rel="icon" href="<?= base_url('assets/logo/icon.png'); ?>">

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custome css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/style.css'); ?>">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 15px 12px 12px 0;
  display: inline-block;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.btnx{
  display: inline-block;
  margin-top: 1rem;
  padding: .8rem 3rem;
  border-radius: 5rem;
  background: var(--gradient);
  font-size: 1rem;
  color: #fff;
  cursor: pointer;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  transition: all .3s linear;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; Location of the box
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 15px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #7380ec;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #fff;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

</style>

<body>

    <header>
        <a href="#home"><img class="logo" src="<?= base_url('assets/logo/eresta_dev.png'); ?>"></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#about">About</a>
            <a href="#review">Review</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>