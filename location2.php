<?php


include 'components/connect.php';


session_start();


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
};
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMG Philippines | Location</title>
    <link rel="icon" href="images/omg-logo.png">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/location.css">


</head>


<body>
   
    <?php include 'components/user_header.php'; ?>


<div class="location">
    <div class="branch-locations">
        <button class="branches" data-open-modal>Alaminos Laguna Branch</button>
            <dialog data-modal class="noclose">
                <div class="dialog-content" id="Alaminos-map">Address: JP Rizal St. Brgy I- Poblacion, Alaminos, Laguna (Plaza, Near Munisipyo of Alaminos)</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123857.6625681424!2d121.17941868960693!3d14.044552059086897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd68306a6d54d1%3A0xef3ccbe688f795d0!2sAlaminos%2C%20Laguna!5e0!3m2!1sen!2sph!4v1648655970731!5m2!1sen!2sph" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </dialog>


        <button class="branches" data-open-modal>Los Banos Laguna Branch</button>
            <dialog data-modal class="noclose">
                <div class="dialog-content" id="Los-Banos-map">Address: Kalye Ekis Batong Malake Los Banos,Laguna</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.271867785642!2d121.223805714316!3d14.17884839107516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd61c26b0ccb55%3A0x13b1aac46416a0cb!2sKalye%20Ekis!5e0!3m2!1sen!2sph!4v1648653645767!5m2!1sen!2sph" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </dialog>


        <button class="branches" data-open-modal>San Pablo Laguna Branch</button>
            <dialog data-modal class="noclose">
                <div class="dialog-content" id="San-Pablo-Laguna-map">Address: Rizal Avenue Brgy.VII-D San Pablo,Laguna</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.1008202918697!2d121.32077421431478!3d14.07122339360341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5cce828a872d%3A0x6395d9e9037bfd6c!2sJose%20Rizal%20Ave%2C%20San%20Pablo%20City%2C%20Laguna!5e0!3m2!1sen!2sph!4v1648654951759!5m2!1sen!2sph" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </dialog>


        <button class="branches" data-open-modal>Tabuk Kalinga Branch</button>
            <dialog data-modal class="noclose" >
                <div class="dialog-content" id="Kalinga-map">Address: Purok 6 Bulanao Tabuk City, Kalinga</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243643.7478208925!2d121.27383625607227!3d17.41497585935995!2m3!1f0!2f0!3f0!3m2!1i1024! 2i768!4f13.1!3m3!1m2!1s0x338f99c3d1c5399b%3A0xc919e747c62ce9f4!2sTabuk%2C%20Kalinga!5e0!3m2!1sen!2sph!4v1648654542995!5m2!1sen!2sph" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </dialog>


        <button class="branches" data-open-modal>Sto. Tomas Batangas Branch</button>
            <dialog data-modal class="noclose" >
                <div class="dialog-content" id="Batangas-map">Address: 8 Governor A. Carpio Ave, Brgy San Pedro. Sto. Tomas City, Batangas</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123857.6625681424!2d121.17941868960693!3d14.044552059086897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd68306a6d54d1%3A0xef3ccbe688f795d0!2sAlaminos%2C%20Laguna!5e0!3m2!1sen!2sph!4v1648655970731!5m2!1sen!2sph" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.271867785642!2d121.223805714316!3d14.17884839107516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd61c26b0ccb55%3A0x13b1aac46416a0cb!2sKalye%20Ekis!5e0!3m2!1sen!2sph!4v1648653645767!5m2!1sen!2sph" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </dialog>
    </div>
</div>






    <script src="js\script.js"></script>




<!-- <?php include 'components/footer.php'; ?> -->


</body>






</html>
