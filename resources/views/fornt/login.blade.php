<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>HC-Login</title>
    <link rel="icon" type="image/ico" href="https://i.pinimg.com/originals/16/aa/df/16aadf06716be2bb9c958b31ee1173a1.jpg" />
</head>
<style>
    body
    {
      background-image: url('/images/login.jpg');
        /* height: 1000px;  */
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
    }
     .box
    {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
    .containter
    {
        background-color: rgba(255, 255, 255, 0.110);
        /* background-color: black; */
        border-radius: 30px;
        margin-top: 40px;
        width: 400px;
        height: 550px;
        padding: 20px;
        
    }
    body
    {
        /* background-image: url(bg.jpg); */ */
    }
    label
    {
        color: orange;
        font-size: 20px;
        font-family: calibri;
    }
    #B
    {
        background-color: rgba(61, 47, 9, 0.030);
        color: white;
        border: none;
        border-bottom: 1px solid white;
        
    }
    #A
    {
        background-color:rgba(61, 47, 9, 0.111);
        color: orange;
        font-size: 20px;
        border-radius: 20px;

    }
    #A:hover
    {
        background-color: rgba(255, 255, 255, 0.308);
        border:1px solid rgba(61, 47, 9, 0.175);
        color: white;
        font-size: 22px;
    }
    .LB:hover
    {
        color: blue;
    }

    .logo
    {
      width: 100px;
    }



    /* ---------------------------------------------------------- */
    html, body {
  height: 100%;
}

body {
  /* background: black; */
  overflow: hidden;
}

.wrap {
  position: relative;
  margin-top: 20%;
  left: 15%;
  width: 0;
  height: 0;
  transform-style: preserve-3d;
  perspective: 1000px;
  animation: rotate 14s infinite linear;
}

@keyframes rotate {
  100% {
    transform: rotateY(360deg) rotateX(360deg);
  }
}
.c {
  position: absolute;
  width: 2px;
  height: 2px;
  border-radius: 50%;
  opacity: 0;
}

.c:nth-child(1) {
  animation: orbit1 14s infinite;
  animation-delay: 0.01s;
  background-color: #ff0100;
}

@keyframes orbit1 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-8deg) rotateY(16deg) translateX(100px) rotateZ(8deg);
  }
  80% {
    transform: rotateZ(-8deg) rotateY(16deg) translateX(100px) rotateZ(8deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-8deg) rotateY(16deg) translateX(300px) rotateZ(8deg);
  }
}
.c:nth-child(2) {
  animation: orbit2 14s infinite;
  animation-delay: 0.02s;
  background-color: #ff0100;
}

@keyframes orbit2 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-182deg) rotateY(232deg) translateX(100px) rotateZ(182deg);
  }
  80% {
    transform: rotateZ(-182deg) rotateY(232deg) translateX(100px) rotateZ(182deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-182deg) rotateY(232deg) translateX(300px) rotateZ(182deg);
  }
}
.c:nth-child(3) {
  animation: orbit3 14s infinite;
  animation-delay: 0.03s;
  background-color: #ff0200;
}

@keyframes orbit3 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-222deg) rotateY(80deg) translateX(100px) rotateZ(222deg);
  }
  80% {
    transform: rotateZ(-222deg) rotateY(80deg) translateX(100px) rotateZ(222deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-222deg) rotateY(80deg) translateX(300px) rotateZ(222deg);
  }
}
.c:nth-child(4) {
  animation: orbit4 14s infinite;
  animation-delay: 0.04s;
  background-color: #ff0200;
}

@keyframes orbit4 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-131deg) rotateY(7deg) translateX(100px) rotateZ(131deg);
  }
  80% {
    transform: rotateZ(-131deg) rotateY(7deg) translateX(100px) rotateZ(131deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-131deg) rotateY(7deg) translateX(300px) rotateZ(131deg);
  }
}
.c:nth-child(5) {
  animation: orbit5 14s infinite;
  animation-delay: 0.05s;
  background-color: #ff0300;
}

@keyframes orbit5 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-131deg) rotateY(88deg) translateX(100px) rotateZ(131deg);
  }
  80% {
    transform: rotateZ(-131deg) rotateY(88deg) translateX(100px) rotateZ(131deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-131deg) rotateY(88deg) translateX(300px) rotateZ(131deg);
  }
}
.c:nth-child(6) {
  animation: orbit6 14s infinite;
  animation-delay: 0.06s;
  background-color: #ff0300;
}

@keyframes orbit6 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-151deg) rotateY(30deg) translateX(100px) rotateZ(151deg);
  }
  80% {
    transform: rotateZ(-151deg) rotateY(30deg) translateX(100px) rotateZ(151deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-151deg) rotateY(30deg) translateX(300px) rotateZ(151deg);
  }
}
.c:nth-child(7) {
  animation: orbit7 14s infinite;
  animation-delay: 0.07s;
  background-color: #ff0400;
}

@keyframes orbit7 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-304deg) rotateY(38deg) translateX(100px) rotateZ(304deg);
  }
  80% {
    transform: rotateZ(-304deg) rotateY(38deg) translateX(100px) rotateZ(304deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-304deg) rotateY(38deg) translateX(300px) rotateZ(304deg);
  }
}
.c:nth-child(8) {
  animation: orbit8 14s infinite;
  animation-delay: 0.08s;
  background-color: #ff0500;
}

@keyframes orbit8 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-238deg) rotateY(257deg) translateX(100px) rotateZ(238deg);
  }
  80% {
    transform: rotateZ(-238deg) rotateY(257deg) translateX(100px) rotateZ(238deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-238deg) rotateY(257deg) translateX(300px) rotateZ(238deg);
  }
}
.c:nth-child(9) {
  animation: orbit9 14s infinite;
  animation-delay: 0.09s;
  background-color: #ff0500;
}

@keyframes orbit9 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-175deg) rotateY(97deg) translateX(100px) rotateZ(175deg);
  }
  80% {
    transform: rotateZ(-175deg) rotateY(97deg) translateX(100px) rotateZ(175deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-175deg) rotateY(97deg) translateX(300px) rotateZ(175deg);
  }
}
.c:nth-child(10) {
  animation: orbit10 14s infinite;
  animation-delay: 0.1s;
  background-color: #ff0600;
}

@keyframes orbit10 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-149deg) rotateY(289deg) translateX(100px) rotateZ(149deg);
  }
  80% {
    transform: rotateZ(-149deg) rotateY(289deg) translateX(100px) rotateZ(149deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-149deg) rotateY(289deg) translateX(300px) rotateZ(149deg);
  }
}
.c:nth-child(11) {
  animation: orbit11 14s infinite;
  animation-delay: 0.11s;
  background-color: #ff0600;
}

@keyframes orbit11 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-89deg) rotateY(281deg) translateX(100px) rotateZ(89deg);
  }
  80% {
    transform: rotateZ(-89deg) rotateY(281deg) translateX(100px) rotateZ(89deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-89deg) rotateY(281deg) translateX(300px) rotateZ(89deg);
  }
}
.c:nth-child(12) {
  animation: orbit12 14s infinite;
  animation-delay: 0.12s;
  background-color: #ff0700;
}

@keyframes orbit12 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-288deg) rotateY(228deg) translateX(100px) rotateZ(288deg);
  }
  80% {
    transform: rotateZ(-288deg) rotateY(228deg) translateX(100px) rotateZ(288deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-288deg) rotateY(228deg) translateX(300px) rotateZ(288deg);
  }
}
.c:nth-child(13) {
  animation: orbit13 14s infinite;
  animation-delay: 0.13s;
  background-color: #ff0700;
}

@keyframes orbit13 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-24deg) rotateY(334deg) translateX(100px) rotateZ(24deg);
  }
  80% {
    transform: rotateZ(-24deg) rotateY(334deg) translateX(100px) rotateZ(24deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-24deg) rotateY(334deg) translateX(300px) rotateZ(24deg);
  }
}
.c:nth-child(14) {
  animation: orbit14 14s infinite;
  animation-delay: 0.14s;
  background-color: #ff0800;
}

@keyframes orbit14 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-214deg) rotateY(238deg) translateX(100px) rotateZ(214deg);
  }
  80% {
    transform: rotateZ(-214deg) rotateY(238deg) translateX(100px) rotateZ(214deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-214deg) rotateY(238deg) translateX(300px) rotateZ(214deg);
  }
}
.c:nth-child(15) {
  animation: orbit15 14s infinite;
  animation-delay: 0.15s;
  background-color: #ff0900;
}

@keyframes orbit15 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-51deg) rotateY(231deg) translateX(100px) rotateZ(51deg);
  }
  80% {
    transform: rotateZ(-51deg) rotateY(231deg) translateX(100px) rotateZ(51deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-51deg) rotateY(231deg) translateX(300px) rotateZ(51deg);
  }
}
.c:nth-child(16) {
  animation: orbit16 14s infinite;
  animation-delay: 0.16s;
  background-color: #ff0900;
}

@keyframes orbit16 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-32deg) rotateY(125deg) translateX(100px) rotateZ(32deg);
  }
  80% {
    transform: rotateZ(-32deg) rotateY(125deg) translateX(100px) rotateZ(32deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-32deg) rotateY(125deg) translateX(300px) rotateZ(32deg);
  }
}
.c:nth-child(17) {
  animation: orbit17 14s infinite;
  animation-delay: 0.17s;
  background-color: #ff0a00;
}

@keyframes orbit17 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-154deg) rotateY(45deg) translateX(100px) rotateZ(154deg);
  }
  80% {
    transform: rotateZ(-154deg) rotateY(45deg) translateX(100px) rotateZ(154deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-154deg) rotateY(45deg) translateX(300px) rotateZ(154deg);
  }
}
.c:nth-child(18) {
  animation: orbit18 14s infinite;
  animation-delay: 0.18s;
  background-color: #ff0a00;
}

@keyframes orbit18 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-95deg) rotateY(24deg) translateX(100px) rotateZ(95deg);
  }
  80% {
    transform: rotateZ(-95deg) rotateY(24deg) translateX(100px) rotateZ(95deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-95deg) rotateY(24deg) translateX(300px) rotateZ(95deg);
  }
}
.c:nth-child(19) {
  animation: orbit19 14s infinite;
  animation-delay: 0.19s;
  background-color: #ff0b00;
}

@keyframes orbit19 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-147deg) rotateY(236deg) translateX(100px) rotateZ(147deg);
  }
  80% {
    transform: rotateZ(-147deg) rotateY(236deg) translateX(100px) rotateZ(147deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-147deg) rotateY(236deg) translateX(300px) rotateZ(147deg);
  }
}
.c:nth-child(20) {
  animation: orbit20 14s infinite;
  animation-delay: 0.2s;
  background-color: #ff0b00;
}

@keyframes orbit20 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-291deg) rotateY(248deg) translateX(100px) rotateZ(291deg);
  }
  80% {
    transform: rotateZ(-291deg) rotateY(248deg) translateX(100px) rotateZ(291deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-291deg) rotateY(248deg) translateX(300px) rotateZ(291deg);
  }
}
.c:nth-child(21) {
  animation: orbit21 14s infinite;
  animation-delay: 0.21s;
  background-color: #ff0c00;
}

@keyframes orbit21 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-10deg) rotateY(232deg) translateX(100px) rotateZ(10deg);
  }
  80% {
    transform: rotateZ(-10deg) rotateY(232deg) translateX(100px) rotateZ(10deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-10deg) rotateY(232deg) translateX(300px) rotateZ(10deg);
  }
}
.c:nth-child(22) {
  animation: orbit22 14s infinite;
  animation-delay: 0.22s;
  background-color: #ff0c00;
}

@keyframes orbit22 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-333deg) rotateY(115deg) translateX(100px) rotateZ(333deg);
  }
  80% {
    transform: rotateZ(-333deg) rotateY(115deg) translateX(100px) rotateZ(333deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-333deg) rotateY(115deg) translateX(300px) rotateZ(333deg);
  }
}
.c:nth-child(23) {
  animation: orbit23 14s infinite;
  animation-delay: 0.23s;
  background-color: #ff0d00;
}

@keyframes orbit23 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-245deg) rotateY(314deg) translateX(100px) rotateZ(245deg);
  }
  80% {
    transform: rotateZ(-245deg) rotateY(314deg) translateX(100px) rotateZ(245deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-245deg) rotateY(314deg) translateX(300px) rotateZ(245deg);
  }
}
.c:nth-child(24) {
  animation: orbit24 14s infinite;
  animation-delay: 0.24s;
  background-color: #ff0e00;
}

@keyframes orbit24 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-57deg) rotateY(7deg) translateX(100px) rotateZ(57deg);
  }
  80% {
    transform: rotateZ(-57deg) rotateY(7deg) translateX(100px) rotateZ(57deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-57deg) rotateY(7deg) translateX(300px) rotateZ(57deg);
  }
}
.c:nth-child(25) {
  animation: orbit25 14s infinite;
  animation-delay: 0.25s;
  background-color: #ff0e00;
}

@keyframes orbit25 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-259deg) rotateY(241deg) translateX(100px) rotateZ(259deg);
  }
  80% {
    transform: rotateZ(-259deg) rotateY(241deg) translateX(100px) rotateZ(259deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-259deg) rotateY(241deg) translateX(300px) rotateZ(259deg);
  }
}
.c:nth-child(26) {
  animation: orbit26 14s infinite;
  animation-delay: 0.26s;
  background-color: #ff0f00;
}

@keyframes orbit26 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-323deg) rotateY(194deg) translateX(100px) rotateZ(323deg);
  }
  80% {
    transform: rotateZ(-323deg) rotateY(194deg) translateX(100px) rotateZ(323deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-323deg) rotateY(194deg) translateX(300px) rotateZ(323deg);
  }
}
.c:nth-child(27) {
  animation: orbit27 14s infinite;
  animation-delay: 0.27s;
  background-color: #ff0f00;
}

@keyframes orbit27 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-25deg) rotateY(134deg) translateX(100px) rotateZ(25deg);
  }
  80% {
    transform: rotateZ(-25deg) rotateY(134deg) translateX(100px) rotateZ(25deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-25deg) rotateY(134deg) translateX(300px) rotateZ(25deg);
  }
}
.c:nth-child(28) {
  animation: orbit28 14s infinite;
  animation-delay: 0.28s;
  background-color: #ff1000;
}

@keyframes orbit28 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-81deg) rotateY(5deg) translateX(100px) rotateZ(81deg);
  }
  80% {
    transform: rotateZ(-81deg) rotateY(5deg) translateX(100px) rotateZ(81deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-81deg) rotateY(5deg) translateX(300px) rotateZ(81deg);
  }
}
.c:nth-child(29) {
  animation: orbit29 14s infinite;
  animation-delay: 0.29s;
  background-color: #ff1000;
}

@keyframes orbit29 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-85deg) rotateY(86deg) translateX(100px) rotateZ(85deg);
  }
  80% {
    transform: rotateZ(-85deg) rotateY(86deg) translateX(100px) rotateZ(85deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-85deg) rotateY(86deg) translateX(300px) rotateZ(85deg);
  }
}
.c:nth-child(30) {
  animation: orbit30 14s infinite;
  animation-delay: 0.3s;
  background-color: #ff1100;
}

@keyframes orbit30 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-116deg) rotateY(312deg) translateX(100px) rotateZ(116deg);
  }
  80% {
    transform: rotateZ(-116deg) rotateY(312deg) translateX(100px) rotateZ(116deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-116deg) rotateY(312deg) translateX(300px) rotateZ(116deg);
  }
}
.c:nth-child(31) {
  animation: orbit31 14s infinite;
  animation-delay: 0.31s;
  background-color: #ff1200;
}

@keyframes orbit31 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-305deg) rotateY(160deg) translateX(100px) rotateZ(305deg);
  }
  80% {
    transform: rotateZ(-305deg) rotateY(160deg) translateX(100px) rotateZ(305deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-305deg) rotateY(160deg) translateX(300px) rotateZ(305deg);
  }
}
.c:nth-child(32) {
  animation: orbit32 14s infinite;
  animation-delay: 0.32s;
  background-color: #ff1200;
}

@keyframes orbit32 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-61deg) rotateY(352deg) translateX(100px) rotateZ(61deg);
  }
  80% {
    transform: rotateZ(-61deg) rotateY(352deg) translateX(100px) rotateZ(61deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-61deg) rotateY(352deg) translateX(300px) rotateZ(61deg);
  }
}
.c:nth-child(33) {
  animation: orbit33 14s infinite;
  animation-delay: 0.33s;
  background-color: #ff1300;
}

@keyframes orbit33 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-320deg) rotateY(24deg) translateX(100px) rotateZ(320deg);
  }
  80% {
    transform: rotateZ(-320deg) rotateY(24deg) translateX(100px) rotateZ(320deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-320deg) rotateY(24deg) translateX(300px) rotateZ(320deg);
  }
}
.c:nth-child(34) {
  animation: orbit34 14s infinite;
  animation-delay: 0.34s;
  background-color: #ff1300;
}

@keyframes orbit34 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-270deg) rotateY(44deg) translateX(100px) rotateZ(270deg);
  }
  80% {
    transform: rotateZ(-270deg) rotateY(44deg) translateX(100px) rotateZ(270deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-270deg) rotateY(44deg) translateX(300px) rotateZ(270deg);
  }
}
.c:nth-child(35) {
  animation: orbit35 14s infinite;
  animation-delay: 0.35s;
  background-color: #ff1400;
}

@keyframes orbit35 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-103deg) rotateY(351deg) translateX(100px) rotateZ(103deg);
  }
  80% {
    transform: rotateZ(-103deg) rotateY(351deg) translateX(100px) rotateZ(103deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-103deg) rotateY(351deg) translateX(300px) rotateZ(103deg);
  }
}
.c:nth-child(36) {
  animation: orbit36 14s infinite;
  animation-delay: 0.36s;
  background-color: #ff1400;
}

@keyframes orbit36 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-134deg) rotateY(287deg) translateX(100px) rotateZ(134deg);
  }
  80% {
    transform: rotateZ(-134deg) rotateY(287deg) translateX(100px) rotateZ(134deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-134deg) rotateY(287deg) translateX(300px) rotateZ(134deg);
  }
}
.c:nth-child(37) {
  animation: orbit37 14s infinite;
  animation-delay: 0.37s;
  background-color: #ff1500;
}

@keyframes orbit37 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-101deg) rotateY(89deg) translateX(100px) rotateZ(101deg);
  }
  80% {
    transform: rotateZ(-101deg) rotateY(89deg) translateX(100px) rotateZ(101deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-101deg) rotateY(89deg) translateX(300px) rotateZ(101deg);
  }
}
.c:nth-child(38) {
  animation: orbit38 14s infinite;
  animation-delay: 0.38s;
  background-color: #ff1600;
}

@keyframes orbit38 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-341deg) rotateY(295deg) translateX(100px) rotateZ(341deg);
  }
  80% {
    transform: rotateZ(-341deg) rotateY(295deg) translateX(100px) rotateZ(341deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-341deg) rotateY(295deg) translateX(300px) rotateZ(341deg);
  }
}
.c:nth-child(39) {
  animation: orbit39 14s infinite;
  animation-delay: 0.39s;
  background-color: #ff1600;
}

@keyframes orbit39 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-236deg) rotateY(248deg) translateX(100px) rotateZ(236deg);
  }
  80% {
    transform: rotateZ(-236deg) rotateY(248deg) translateX(100px) rotateZ(236deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-236deg) rotateY(248deg) translateX(300px) rotateZ(236deg);
  }
}
.c:nth-child(40) {
  animation: orbit40 14s infinite;
  animation-delay: 0.4s;
  background-color: #ff1700;
}

@keyframes orbit40 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-176deg) rotateY(61deg) translateX(100px) rotateZ(176deg);
  }
  80% {
    transform: rotateZ(-176deg) rotateY(61deg) translateX(100px) rotateZ(176deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-176deg) rotateY(61deg) translateX(300px) rotateZ(176deg);
  }
}
.c:nth-child(41) {
  animation: orbit41 14s infinite;
  animation-delay: 0.41s;
  background-color: #ff1700;
}

@keyframes orbit41 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-336deg) rotateY(273deg) translateX(100px) rotateZ(336deg);
  }
  80% {
    transform: rotateZ(-336deg) rotateY(273deg) translateX(100px) rotateZ(336deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-336deg) rotateY(273deg) translateX(300px) rotateZ(336deg);
  }
}
.c:nth-child(42) {
  animation: orbit42 14s infinite;
  animation-delay: 0.42s;
  background-color: #ff1800;
}

@keyframes orbit42 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-56deg) rotateY(259deg) translateX(100px) rotateZ(56deg);
  }
  80% {
    transform: rotateZ(-56deg) rotateY(259deg) translateX(100px) rotateZ(56deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-56deg) rotateY(259deg) translateX(300px) rotateZ(56deg);
  }
}
.c:nth-child(43) {
  animation: orbit43 14s infinite;
  animation-delay: 0.43s;
  background-color: #ff1800;
}

@keyframes orbit43 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-312deg) rotateY(85deg) translateX(100px) rotateZ(312deg);
  }
  80% {
    transform: rotateZ(-312deg) rotateY(85deg) translateX(100px) rotateZ(312deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-312deg) rotateY(85deg) translateX(300px) rotateZ(312deg);
  }
}
.c:nth-child(44) {
  animation: orbit44 14s infinite;
  animation-delay: 0.44s;
  background-color: #ff1900;
}

@keyframes orbit44 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-252deg) rotateY(124deg) translateX(100px) rotateZ(252deg);
  }
  80% {
    transform: rotateZ(-252deg) rotateY(124deg) translateX(100px) rotateZ(252deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-252deg) rotateY(124deg) translateX(300px) rotateZ(252deg);
  }
}
.c:nth-child(45) {
  animation: orbit45 14s infinite;
  animation-delay: 0.45s;
  background-color: #ff1a00;
}

@keyframes orbit45 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-115deg) rotateY(50deg) translateX(100px) rotateZ(115deg);
  }
  80% {
    transform: rotateZ(-115deg) rotateY(50deg) translateX(100px) rotateZ(115deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-115deg) rotateY(50deg) translateX(300px) rotateZ(115deg);
  }
}
.c:nth-child(46) {
  animation: orbit46 14s infinite;
  animation-delay: 0.46s;
  background-color: #ff1a00;
}

@keyframes orbit46 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-45deg) rotateY(79deg) translateX(100px) rotateZ(45deg);
  }
  80% {
    transform: rotateZ(-45deg) rotateY(79deg) translateX(100px) rotateZ(45deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-45deg) rotateY(79deg) translateX(300px) rotateZ(45deg);
  }
}
.c:nth-child(47) {
  animation: orbit47 14s infinite;
  animation-delay: 0.47s;
  background-color: #ff1b00;
}

@keyframes orbit47 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-172deg) rotateY(66deg) translateX(100px) rotateZ(172deg);
  }
  80% {
    transform: rotateZ(-172deg) rotateY(66deg) translateX(100px) rotateZ(172deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-172deg) rotateY(66deg) translateX(300px) rotateZ(172deg);
  }
}
.c:nth-child(48) {
  animation: orbit48 14s infinite;
  animation-delay: 0.48s;
  background-color: #ff1b00;
}

@keyframes orbit48 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-167deg) rotateY(149deg) translateX(100px) rotateZ(167deg);
  }
  80% {
    transform: rotateZ(-167deg) rotateY(149deg) translateX(100px) rotateZ(167deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-167deg) rotateY(149deg) translateX(300px) rotateZ(167deg);
  }
}
.c:nth-child(49) {
  animation: orbit49 14s infinite;
  animation-delay: 0.49s;
  background-color: #ff1c00;
}

@keyframes orbit49 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-55deg) rotateY(312deg) translateX(100px) rotateZ(55deg);
  }
  80% {
    transform: rotateZ(-55deg) rotateY(312deg) translateX(100px) rotateZ(55deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-55deg) rotateY(312deg) translateX(300px) rotateZ(55deg);
  }
}
.c:nth-child(50) {
  animation: orbit50 14s infinite;
  animation-delay: 0.5s;
  background-color: #ff1c00;
}

@keyframes orbit50 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-30deg) rotateY(217deg) translateX(100px) rotateZ(30deg);
  }
  80% {
    transform: rotateZ(-30deg) rotateY(217deg) translateX(100px) rotateZ(30deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-30deg) rotateY(217deg) translateX(300px) rotateZ(30deg);
  }
}
.c:nth-child(51) {
  animation: orbit51 14s infinite;
  animation-delay: 0.51s;
  background-color: #ff1d00;
}

@keyframes orbit51 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-41deg) rotateY(220deg) translateX(100px) rotateZ(41deg);
  }
  80% {
    transform: rotateZ(-41deg) rotateY(220deg) translateX(100px) rotateZ(41deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-41deg) rotateY(220deg) translateX(300px) rotateZ(41deg);
  }
}
.c:nth-child(52) {
  animation: orbit52 14s infinite;
  animation-delay: 0.52s;
  background-color: #ff1d00;
}

@keyframes orbit52 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-46deg) rotateY(80deg) translateX(100px) rotateZ(46deg);
  }
  80% {
    transform: rotateZ(-46deg) rotateY(80deg) translateX(100px) rotateZ(46deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-46deg) rotateY(80deg) translateX(300px) rotateZ(46deg);
  }
}
.c:nth-child(53) {
  animation: orbit53 14s infinite;
  animation-delay: 0.53s;
  background-color: #ff1e00;
}

@keyframes orbit53 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-232deg) rotateY(44deg) translateX(100px) rotateZ(232deg);
  }
  80% {
    transform: rotateZ(-232deg) rotateY(44deg) translateX(100px) rotateZ(232deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-232deg) rotateY(44deg) translateX(300px) rotateZ(232deg);
  }
}
.c:nth-child(54) {
  animation: orbit54 14s infinite;
  animation-delay: 0.54s;
  background-color: #ff1f00;
}

@keyframes orbit54 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-349deg) rotateY(110deg) translateX(100px) rotateZ(349deg);
  }
  80% {
    transform: rotateZ(-349deg) rotateY(110deg) translateX(100px) rotateZ(349deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-349deg) rotateY(110deg) translateX(300px) rotateZ(349deg);
  }
}
.c:nth-child(55) {
  animation: orbit55 14s infinite;
  animation-delay: 0.55s;
  background-color: #ff1f00;
}

@keyframes orbit55 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-316deg) rotateY(294deg) translateX(100px) rotateZ(316deg);
  }
  80% {
    transform: rotateZ(-316deg) rotateY(294deg) translateX(100px) rotateZ(316deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-316deg) rotateY(294deg) translateX(300px) rotateZ(316deg);
  }
}
.c:nth-child(56) {
  animation: orbit56 14s infinite;
  animation-delay: 0.56s;
  background-color: #ff2000;
}

@keyframes orbit56 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-88deg) rotateY(62deg) translateX(100px) rotateZ(88deg);
  }
  80% {
    transform: rotateZ(-88deg) rotateY(62deg) translateX(100px) rotateZ(88deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-88deg) rotateY(62deg) translateX(300px) rotateZ(88deg);
  }
}
.c:nth-child(57) {
  animation: orbit57 14s infinite;
  animation-delay: 0.57s;
  background-color: #ff2000;
}

@keyframes orbit57 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-119deg) rotateY(133deg) translateX(100px) rotateZ(119deg);
  }
  80% {
    transform: rotateZ(-119deg) rotateY(133deg) translateX(100px) rotateZ(119deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-119deg) rotateY(133deg) translateX(300px) rotateZ(119deg);
  }
}
.c:nth-child(58) {
  animation: orbit58 14s infinite;
  animation-delay: 0.58s;
  background-color: #ff2100;
}

@keyframes orbit58 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-45deg) rotateY(76deg) translateX(100px) rotateZ(45deg);
  }
  80% {
    transform: rotateZ(-45deg) rotateY(76deg) translateX(100px) rotateZ(45deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-45deg) rotateY(76deg) translateX(300px) rotateZ(45deg);
  }
}
.c:nth-child(59) {
  animation: orbit59 14s infinite;
  animation-delay: 0.59s;
  background-color: #ff2100;
}

@keyframes orbit59 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-98deg) rotateY(307deg) translateX(100px) rotateZ(98deg);
  }
  80% {
    transform: rotateZ(-98deg) rotateY(307deg) translateX(100px) rotateZ(98deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-98deg) rotateY(307deg) translateX(300px) rotateZ(98deg);
  }
}
.c:nth-child(60) {
  animation: orbit60 14s infinite;
  animation-delay: 0.6s;
  background-color: #ff2200;
}

@keyframes orbit60 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-54deg) rotateY(250deg) translateX(100px) rotateZ(54deg);
  }
  80% {
    transform: rotateZ(-54deg) rotateY(250deg) translateX(100px) rotateZ(54deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-54deg) rotateY(250deg) translateX(300px) rotateZ(54deg);
  }
}
.c:nth-child(61) {
  animation: orbit61 14s infinite;
  animation-delay: 0.61s;
  background-color: #ff2300;
}

@keyframes orbit61 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-313deg) rotateY(142deg) translateX(100px) rotateZ(313deg);
  }
  80% {
    transform: rotateZ(-313deg) rotateY(142deg) translateX(100px) rotateZ(313deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-313deg) rotateY(142deg) translateX(300px) rotateZ(313deg);
  }
}
.c:nth-child(62) {
  animation: orbit62 14s infinite;
  animation-delay: 0.62s;
  background-color: #ff2300;
}

@keyframes orbit62 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-189deg) rotateY(178deg) translateX(100px) rotateZ(189deg);
  }
  80% {
    transform: rotateZ(-189deg) rotateY(178deg) translateX(100px) rotateZ(189deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-189deg) rotateY(178deg) translateX(300px) rotateZ(189deg);
  }
}
.c:nth-child(63) {
  animation: orbit63 14s infinite;
  animation-delay: 0.63s;
  background-color: #ff2400;
}

@keyframes orbit63 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-57deg) rotateY(6deg) translateX(100px) rotateZ(57deg);
  }
  80% {
    transform: rotateZ(-57deg) rotateY(6deg) translateX(100px) rotateZ(57deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-57deg) rotateY(6deg) translateX(300px) rotateZ(57deg);
  }
}
.c:nth-child(64) {
  animation: orbit64 14s infinite;
  animation-delay: 0.64s;
  background-color: #ff2400;
}

@keyframes orbit64 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-248deg) rotateY(265deg) translateX(100px) rotateZ(248deg);
  }
  80% {
    transform: rotateZ(-248deg) rotateY(265deg) translateX(100px) rotateZ(248deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-248deg) rotateY(265deg) translateX(300px) rotateZ(248deg);
  }
}
.c:nth-child(65) {
  animation: orbit65 14s infinite;
  animation-delay: 0.65s;
  background-color: #ff2500;
}

@keyframes orbit65 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-271deg) rotateY(288deg) translateX(100px) rotateZ(271deg);
  }
  80% {
    transform: rotateZ(-271deg) rotateY(288deg) translateX(100px) rotateZ(271deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-271deg) rotateY(288deg) translateX(300px) rotateZ(271deg);
  }
}
.c:nth-child(66) {
  animation: orbit66 14s infinite;
  animation-delay: 0.66s;
  background-color: #ff2500;
}

@keyframes orbit66 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-90deg) rotateY(312deg) translateX(100px) rotateZ(90deg);
  }
  80% {
    transform: rotateZ(-90deg) rotateY(312deg) translateX(100px) rotateZ(90deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-90deg) rotateY(312deg) translateX(300px) rotateZ(90deg);
  }
}
.c:nth-child(67) {
  animation: orbit67 14s infinite;
  animation-delay: 0.67s;
  background-color: #ff2600;
}

@keyframes orbit67 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-353deg) rotateY(51deg) translateX(100px) rotateZ(353deg);
  }
  80% {
    transform: rotateZ(-353deg) rotateY(51deg) translateX(100px) rotateZ(353deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-353deg) rotateY(51deg) translateX(300px) rotateZ(353deg);
  }
}
.c:nth-child(68) {
  animation: orbit68 14s infinite;
  animation-delay: 0.68s;
  background-color: #ff2700;
}

@keyframes orbit68 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-33deg) rotateY(21deg) translateX(100px) rotateZ(33deg);
  }
  80% {
    transform: rotateZ(-33deg) rotateY(21deg) translateX(100px) rotateZ(33deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-33deg) rotateY(21deg) translateX(300px) rotateZ(33deg);
  }
}
.c:nth-child(69) {
  animation: orbit69 14s infinite;
  animation-delay: 0.69s;
  background-color: #ff2700;
}

@keyframes orbit69 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-1deg) rotateY(324deg) translateX(100px) rotateZ(1deg);
  }
  80% {
    transform: rotateZ(-1deg) rotateY(324deg) translateX(100px) rotateZ(1deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-1deg) rotateY(324deg) translateX(300px) rotateZ(1deg);
  }
}
.c:nth-child(70) {
  animation: orbit70 14s infinite;
  animation-delay: 0.7s;
  background-color: #ff2800;
}

@keyframes orbit70 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-193deg) rotateY(4deg) translateX(100px) rotateZ(193deg);
  }
  80% {
    transform: rotateZ(-193deg) rotateY(4deg) translateX(100px) rotateZ(193deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-193deg) rotateY(4deg) translateX(300px) rotateZ(193deg);
  }
}
.c:nth-child(71) {
  animation: orbit71 14s infinite;
  animation-delay: 0.71s;
  background-color: #ff2800;
}

@keyframes orbit71 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-259deg) rotateY(206deg) translateX(100px) rotateZ(259deg);
  }
  80% {
    transform: rotateZ(-259deg) rotateY(206deg) translateX(100px) rotateZ(259deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-259deg) rotateY(206deg) translateX(300px) rotateZ(259deg);
  }
}
.c:nth-child(72) {
  animation: orbit72 14s infinite;
  animation-delay: 0.72s;
  background-color: #ff2900;
}

@keyframes orbit72 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-197deg) rotateY(185deg) translateX(100px) rotateZ(197deg);
  }
  80% {
    transform: rotateZ(-197deg) rotateY(185deg) translateX(100px) rotateZ(197deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-197deg) rotateY(185deg) translateX(300px) rotateZ(197deg);
  }
}
.c:nth-child(73) {
  animation: orbit73 14s infinite;
  animation-delay: 0.73s;
  background-color: #ff2900;
}

@keyframes orbit73 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-191deg) rotateY(272deg) translateX(100px) rotateZ(191deg);
  }
  80% {
    transform: rotateZ(-191deg) rotateY(272deg) translateX(100px) rotateZ(191deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-191deg) rotateY(272deg) translateX(300px) rotateZ(191deg);
  }
}
.c:nth-child(74) {
  animation: orbit74 14s infinite;
  animation-delay: 0.74s;
  background-color: #ff2a00;
}

@keyframes orbit74 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-50deg) rotateY(233deg) translateX(100px) rotateZ(50deg);
  }
  80% {
    transform: rotateZ(-50deg) rotateY(233deg) translateX(100px) rotateZ(50deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-50deg) rotateY(233deg) translateX(300px) rotateZ(50deg);
  }
}
.c:nth-child(75) {
  animation: orbit75 14s infinite;
  animation-delay: 0.75s;
  background-color: #ff2b00;
}

@keyframes orbit75 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-236deg) rotateY(220deg) translateX(100px) rotateZ(236deg);
  }
  80% {
    transform: rotateZ(-236deg) rotateY(220deg) translateX(100px) rotateZ(236deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-236deg) rotateY(220deg) translateX(300px) rotateZ(236deg);
  }
}
.c:nth-child(76) {
  animation: orbit76 14s infinite;
  animation-delay: 0.76s;
  background-color: #ff2b00;
}

@keyframes orbit76 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-314deg) rotateY(108deg) translateX(100px) rotateZ(314deg);
  }
  80% {
    transform: rotateZ(-314deg) rotateY(108deg) translateX(100px) rotateZ(314deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-314deg) rotateY(108deg) translateX(300px) rotateZ(314deg);
  }
}
.c:nth-child(77) {
  animation: orbit77 14s infinite;
  animation-delay: 0.77s;
  background-color: #ff2c00;
}

@keyframes orbit77 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-54deg) rotateY(347deg) translateX(100px) rotateZ(54deg);
  }
  80% {
    transform: rotateZ(-54deg) rotateY(347deg) translateX(100px) rotateZ(54deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-54deg) rotateY(347deg) translateX(300px) rotateZ(54deg);
  }
}
.c:nth-child(78) {
  animation: orbit78 14s infinite;
  animation-delay: 0.78s;
  background-color: #ff2c00;
}

@keyframes orbit78 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-293deg) rotateY(164deg) translateX(100px) rotateZ(293deg);
  }
  80% {
    transform: rotateZ(-293deg) rotateY(164deg) translateX(100px) rotateZ(293deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-293deg) rotateY(164deg) translateX(300px) rotateZ(293deg);
  }
}
.c:nth-child(79) {
  animation: orbit79 14s infinite;
  animation-delay: 0.79s;
  background-color: #ff2d00;
}

@keyframes orbit79 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-294deg) rotateY(349deg) translateX(100px) rotateZ(294deg);
  }
  80% {
    transform: rotateZ(-294deg) rotateY(349deg) translateX(100px) rotateZ(294deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-294deg) rotateY(349deg) translateX(300px) rotateZ(294deg);
  }
}
.c:nth-child(80) {
  animation: orbit80 14s infinite;
  animation-delay: 0.8s;
  background-color: #ff2d00;
}

@keyframes orbit80 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-80deg) rotateY(38deg) translateX(100px) rotateZ(80deg);
  }
  80% {
    transform: rotateZ(-80deg) rotateY(38deg) translateX(100px) rotateZ(80deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-80deg) rotateY(38deg) translateX(300px) rotateZ(80deg);
  }
}
.c:nth-child(81) {
  animation: orbit81 14s infinite;
  animation-delay: 0.81s;
  background-color: #ff2e00;
}

@keyframes orbit81 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-22deg) rotateY(280deg) translateX(100px) rotateZ(22deg);
  }
  80% {
    transform: rotateZ(-22deg) rotateY(280deg) translateX(100px) rotateZ(22deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-22deg) rotateY(280deg) translateX(300px) rotateZ(22deg);
  }
}
.c:nth-child(82) {
  animation: orbit82 14s infinite;
  animation-delay: 0.82s;
  background-color: #ff2e00;
}

@keyframes orbit82 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-357deg) rotateY(152deg) translateX(100px) rotateZ(357deg);
  }
  80% {
    transform: rotateZ(-357deg) rotateY(152deg) translateX(100px) rotateZ(357deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-357deg) rotateY(152deg) translateX(300px) rotateZ(357deg);
  }
}
.c:nth-child(83) {
  animation: orbit83 14s infinite;
  animation-delay: 0.83s;
  background-color: #ff2f00;
}

@keyframes orbit83 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-244deg) rotateY(152deg) translateX(100px) rotateZ(244deg);
  }
  80% {
    transform: rotateZ(-244deg) rotateY(152deg) translateX(100px) rotateZ(244deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-244deg) rotateY(152deg) translateX(300px) rotateZ(244deg);
  }
}
.c:nth-child(84) {
  animation: orbit84 14s infinite;
  animation-delay: 0.84s;
  background-color: #ff3000;
}

@keyframes orbit84 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-7deg) rotateY(241deg) translateX(100px) rotateZ(7deg);
  }
  80% {
    transform: rotateZ(-7deg) rotateY(241deg) translateX(100px) rotateZ(7deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-7deg) rotateY(241deg) translateX(300px) rotateZ(7deg);
  }
}
.c:nth-child(85) {
  animation: orbit85 14s infinite;
  animation-delay: 0.85s;
  background-color: #ff3000;
}

@keyframes orbit85 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-31deg) rotateY(291deg) translateX(100px) rotateZ(31deg);
  }
  80% {
    transform: rotateZ(-31deg) rotateY(291deg) translateX(100px) rotateZ(31deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-31deg) rotateY(291deg) translateX(300px) rotateZ(31deg);
  }
}
.c:nth-child(86) {
  animation: orbit86 14s infinite;
  animation-delay: 0.86s;
  background-color: #ff3100;
}

@keyframes orbit86 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-337deg) rotateY(316deg) translateX(100px) rotateZ(337deg);
  }
  80% {
    transform: rotateZ(-337deg) rotateY(316deg) translateX(100px) rotateZ(337deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-337deg) rotateY(316deg) translateX(300px) rotateZ(337deg);
  }
}
.c:nth-child(87) {
  animation: orbit87 14s infinite;
  animation-delay: 0.87s;
  background-color: #ff3100;
}

@keyframes orbit87 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-337deg) rotateY(287deg) translateX(100px) rotateZ(337deg);
  }
  80% {
    transform: rotateZ(-337deg) rotateY(287deg) translateX(100px) rotateZ(337deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-337deg) rotateY(287deg) translateX(300px) rotateZ(337deg);
  }
}
.c:nth-child(88) {
  animation: orbit88 14s infinite;
  animation-delay: 0.88s;
  background-color: #ff3200;
}

@keyframes orbit88 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-25deg) rotateY(256deg) translateX(100px) rotateZ(25deg);
  }
  80% {
    transform: rotateZ(-25deg) rotateY(256deg) translateX(100px) rotateZ(25deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-25deg) rotateY(256deg) translateX(300px) rotateZ(25deg);
  }
}
.c:nth-child(89) {
  animation: orbit89 14s infinite;
  animation-delay: 0.89s;
  background-color: #ff3200;
}

@keyframes orbit89 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-175deg) rotateY(74deg) translateX(100px) rotateZ(175deg);
  }
  80% {
    transform: rotateZ(-175deg) rotateY(74deg) translateX(100px) rotateZ(175deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-175deg) rotateY(74deg) translateX(300px) rotateZ(175deg);
  }
}
.c:nth-child(90) {
  animation: orbit90 14s infinite;
  animation-delay: 0.9s;
  background-color: #ff3300;
}

@keyframes orbit90 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-322deg) rotateY(23deg) translateX(100px) rotateZ(322deg);
  }
  80% {
    transform: rotateZ(-322deg) rotateY(23deg) translateX(100px) rotateZ(322deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-322deg) rotateY(23deg) translateX(300px) rotateZ(322deg);
  }
}
.c:nth-child(91) {
  animation: orbit91 14s infinite;
  animation-delay: 0.91s;
  background-color: #ff3400;
}

@keyframes orbit91 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-88deg) rotateY(94deg) translateX(100px) rotateZ(88deg);
  }
  80% {
    transform: rotateZ(-88deg) rotateY(94deg) translateX(100px) rotateZ(88deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-88deg) rotateY(94deg) translateX(300px) rotateZ(88deg);
  }
}
.c:nth-child(92) {
  animation: orbit92 14s infinite;
  animation-delay: 0.92s;
  background-color: #ff3400;
}

@keyframes orbit92 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-331deg) rotateY(223deg) translateX(100px) rotateZ(331deg);
  }
  80% {
    transform: rotateZ(-331deg) rotateY(223deg) translateX(100px) rotateZ(331deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-331deg) rotateY(223deg) translateX(300px) rotateZ(331deg);
  }
}
.c:nth-child(93) {
  animation: orbit93 14s infinite;
  animation-delay: 0.93s;
  background-color: #ff3500;
}

@keyframes orbit93 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-7deg) rotateY(231deg) translateX(100px) rotateZ(7deg);
  }
  80% {
    transform: rotateZ(-7deg) rotateY(231deg) translateX(100px) rotateZ(7deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-7deg) rotateY(231deg) translateX(300px) rotateZ(7deg);
  }
}
.c:nth-child(94) {
  animation: orbit94 14s infinite;
  animation-delay: 0.94s;
  background-color: #ff3500;
}

@keyframes orbit94 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-302deg) rotateY(229deg) translateX(100px) rotateZ(302deg);
  }
  80% {
    transform: rotateZ(-302deg) rotateY(229deg) translateX(100px) rotateZ(302deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-302deg) rotateY(229deg) translateX(300px) rotateZ(302deg);
  }
}
.c:nth-child(95) {
  animation: orbit95 14s infinite;
  animation-delay: 0.95s;
  background-color: #ff3600;
}

@keyframes orbit95 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-53deg) rotateY(341deg) translateX(100px) rotateZ(53deg);
  }
  80% {
    transform: rotateZ(-53deg) rotateY(341deg) translateX(100px) rotateZ(53deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-53deg) rotateY(341deg) translateX(300px) rotateZ(53deg);
  }
}
.c:nth-child(96) {
  animation: orbit96 14s infinite;
  animation-delay: 0.96s;
  background-color: #ff3600;
}

@keyframes orbit96 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-359deg) rotateY(11deg) translateX(100px) rotateZ(359deg);
  }
  80% {
    transform: rotateZ(-359deg) rotateY(11deg) translateX(100px) rotateZ(359deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-359deg) rotateY(11deg) translateX(300px) rotateZ(359deg);
  }
}
.c:nth-child(97) {
  animation: orbit97 14s infinite;
  animation-delay: 0.97s;
  background-color: #ff3700;
}

@keyframes orbit97 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-291deg) rotateY(196deg) translateX(100px) rotateZ(291deg);
  }
  80% {
    transform: rotateZ(-291deg) rotateY(196deg) translateX(100px) rotateZ(291deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-291deg) rotateY(196deg) translateX(300px) rotateZ(291deg);
  }
}
.c:nth-child(98) {
  animation: orbit98 14s infinite;
  animation-delay: 0.98s;
  background-color: #ff3800;
}

@keyframes orbit98 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-331deg) rotateY(10deg) translateX(100px) rotateZ(331deg);
  }
  80% {
    transform: rotateZ(-331deg) rotateY(10deg) translateX(100px) rotateZ(331deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-331deg) rotateY(10deg) translateX(300px) rotateZ(331deg);
  }
}
.c:nth-child(99) {
  animation: orbit99 14s infinite;
  animation-delay: 0.99s;
  background-color: #ff3800;
}

@keyframes orbit99 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-293deg) rotateY(9deg) translateX(100px) rotateZ(293deg);
  }
  80% {
    transform: rotateZ(-293deg) rotateY(9deg) translateX(100px) rotateZ(293deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-293deg) rotateY(9deg) translateX(300px) rotateZ(293deg);
  }
}
.c:nth-child(100) {
  animation: orbit100 14s infinite;
  animation-delay: 1s;
  background-color: #ff3900;
}

@keyframes orbit100 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-130deg) rotateY(129deg) translateX(100px) rotateZ(130deg);
  }
  80% {
    transform: rotateZ(-130deg) rotateY(129deg) translateX(100px) rotateZ(130deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-130deg) rotateY(129deg) translateX(300px) rotateZ(130deg);
  }
}
.c:nth-child(101) {
  animation: orbit101 14s infinite;
  animation-delay: 1.01s;
  background-color: #ff3900;
}

@keyframes orbit101 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-143deg) rotateY(66deg) translateX(100px) rotateZ(143deg);
  }
  80% {
    transform: rotateZ(-143deg) rotateY(66deg) translateX(100px) rotateZ(143deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-143deg) rotateY(66deg) translateX(300px) rotateZ(143deg);
  }
}
.c:nth-child(102) {
  animation: orbit102 14s infinite;
  animation-delay: 1.02s;
  background-color: #ff3a00;
}

@keyframes orbit102 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-220deg) rotateY(208deg) translateX(100px) rotateZ(220deg);
  }
  80% {
    transform: rotateZ(-220deg) rotateY(208deg) translateX(100px) rotateZ(220deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-220deg) rotateY(208deg) translateX(300px) rotateZ(220deg);
  }
}
.c:nth-child(103) {
  animation: orbit103 14s infinite;
  animation-delay: 1.03s;
  background-color: #ff3a00;
}

@keyframes orbit103 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-73deg) rotateY(169deg) translateX(100px) rotateZ(73deg);
  }
  80% {
    transform: rotateZ(-73deg) rotateY(169deg) translateX(100px) rotateZ(73deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-73deg) rotateY(169deg) translateX(300px) rotateZ(73deg);
  }
}
.c:nth-child(104) {
  animation: orbit104 14s infinite;
  animation-delay: 1.04s;
  background-color: #ff3b00;
}

@keyframes orbit104 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-174deg) rotateY(39deg) translateX(100px) rotateZ(174deg);
  }
  80% {
    transform: rotateZ(-174deg) rotateY(39deg) translateX(100px) rotateZ(174deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-174deg) rotateY(39deg) translateX(300px) rotateZ(174deg);
  }
}
.c:nth-child(105) {
  animation: orbit105 14s infinite;
  animation-delay: 1.05s;
  background-color: #ff3c00;
}

@keyframes orbit105 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-311deg) rotateY(359deg) translateX(100px) rotateZ(311deg);
  }
  80% {
    transform: rotateZ(-311deg) rotateY(359deg) translateX(100px) rotateZ(311deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-311deg) rotateY(359deg) translateX(300px) rotateZ(311deg);
  }
}
.c:nth-child(106) {
  animation: orbit106 14s infinite;
  animation-delay: 1.06s;
  background-color: #ff3c00;
}

@keyframes orbit106 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-135deg) rotateY(55deg) translateX(100px) rotateZ(135deg);
  }
  80% {
    transform: rotateZ(-135deg) rotateY(55deg) translateX(100px) rotateZ(135deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-135deg) rotateY(55deg) translateX(300px) rotateZ(135deg);
  }
}
.c:nth-child(107) {
  animation: orbit107 14s infinite;
  animation-delay: 1.07s;
  background-color: #ff3d00;
}

@keyframes orbit107 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-56deg) rotateY(353deg) translateX(100px) rotateZ(56deg);
  }
  80% {
    transform: rotateZ(-56deg) rotateY(353deg) translateX(100px) rotateZ(56deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-56deg) rotateY(353deg) translateX(300px) rotateZ(56deg);
  }
}
.c:nth-child(108) {
  animation: orbit108 14s infinite;
  animation-delay: 1.08s;
  background-color: #ff3d00;
}

@keyframes orbit108 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-314deg) rotateY(13deg) translateX(100px) rotateZ(314deg);
  }
  80% {
    transform: rotateZ(-314deg) rotateY(13deg) translateX(100px) rotateZ(314deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-314deg) rotateY(13deg) translateX(300px) rotateZ(314deg);
  }
}
.c:nth-child(109) {
  animation: orbit109 14s infinite;
  animation-delay: 1.09s;
  background-color: #ff3e00;
}

@keyframes orbit109 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-107deg) rotateY(267deg) translateX(100px) rotateZ(107deg);
  }
  80% {
    transform: rotateZ(-107deg) rotateY(267deg) translateX(100px) rotateZ(107deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-107deg) rotateY(267deg) translateX(300px) rotateZ(107deg);
  }
}
.c:nth-child(110) {
  animation: orbit110 14s infinite;
  animation-delay: 1.1s;
  background-color: #ff3e00;
}

@keyframes orbit110 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-181deg) rotateY(187deg) translateX(100px) rotateZ(181deg);
  }
  80% {
    transform: rotateZ(-181deg) rotateY(187deg) translateX(100px) rotateZ(181deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-181deg) rotateY(187deg) translateX(300px) rotateZ(181deg);
  }
}
.c:nth-child(111) {
  animation: orbit111 14s infinite;
  animation-delay: 1.11s;
  background-color: #ff3f00;
}

@keyframes orbit111 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-319deg) rotateY(191deg) translateX(100px) rotateZ(319deg);
  }
  80% {
    transform: rotateZ(-319deg) rotateY(191deg) translateX(100px) rotateZ(319deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-319deg) rotateY(191deg) translateX(300px) rotateZ(319deg);
  }
}
.c:nth-child(112) {
  animation: orbit112 14s infinite;
  animation-delay: 1.12s;
  background-color: #ff3f00;
}

@keyframes orbit112 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-9deg) rotateY(114deg) translateX(100px) rotateZ(9deg);
  }
  80% {
    transform: rotateZ(-9deg) rotateY(114deg) translateX(100px) rotateZ(9deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-9deg) rotateY(114deg) translateX(300px) rotateZ(9deg);
  }
}
.c:nth-child(113) {
  animation: orbit113 14s infinite;
  animation-delay: 1.13s;
  background-color: #ff4000;
}

@keyframes orbit113 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-191deg) rotateY(53deg) translateX(100px) rotateZ(191deg);
  }
  80% {
    transform: rotateZ(-191deg) rotateY(53deg) translateX(100px) rotateZ(191deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-191deg) rotateY(53deg) translateX(300px) rotateZ(191deg);
  }
}
.c:nth-child(114) {
  animation: orbit114 14s infinite;
  animation-delay: 1.14s;
  background-color: #ff4100;
}

@keyframes orbit114 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-33deg) rotateY(305deg) translateX(100px) rotateZ(33deg);
  }
  80% {
    transform: rotateZ(-33deg) rotateY(305deg) translateX(100px) rotateZ(33deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-33deg) rotateY(305deg) translateX(300px) rotateZ(33deg);
  }
}
.c:nth-child(115) {
  animation: orbit115 14s infinite;
  animation-delay: 1.15s;
  background-color: #ff4100;
}

@keyframes orbit115 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-231deg) rotateY(253deg) translateX(100px) rotateZ(231deg);
  }
  80% {
    transform: rotateZ(-231deg) rotateY(253deg) translateX(100px) rotateZ(231deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-231deg) rotateY(253deg) translateX(300px) rotateZ(231deg);
  }
}
.c:nth-child(116) {
  animation: orbit116 14s infinite;
  animation-delay: 1.16s;
  background-color: #ff4200;
}

@keyframes orbit116 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-121deg) rotateY(172deg) translateX(100px) rotateZ(121deg);
  }
  80% {
    transform: rotateZ(-121deg) rotateY(172deg) translateX(100px) rotateZ(121deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-121deg) rotateY(172deg) translateX(300px) rotateZ(121deg);
  }
}
.c:nth-child(117) {
  animation: orbit117 14s infinite;
  animation-delay: 1.17s;
  background-color: #ff4200;
}

@keyframes orbit117 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-193deg) rotateY(92deg) translateX(100px) rotateZ(193deg);
  }
  80% {
    transform: rotateZ(-193deg) rotateY(92deg) translateX(100px) rotateZ(193deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-193deg) rotateY(92deg) translateX(300px) rotateZ(193deg);
  }
}
.c:nth-child(118) {
  animation: orbit118 14s infinite;
  animation-delay: 1.18s;
  background-color: #ff4300;
}

@keyframes orbit118 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-186deg) rotateY(117deg) translateX(100px) rotateZ(186deg);
  }
  80% {
    transform: rotateZ(-186deg) rotateY(117deg) translateX(100px) rotateZ(186deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-186deg) rotateY(117deg) translateX(300px) rotateZ(186deg);
  }
}
.c:nth-child(119) {
  animation: orbit119 14s infinite;
  animation-delay: 1.19s;
  background-color: #ff4300;
}

@keyframes orbit119 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-70deg) rotateY(57deg) translateX(100px) rotateZ(70deg);
  }
  80% {
    transform: rotateZ(-70deg) rotateY(57deg) translateX(100px) rotateZ(70deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-70deg) rotateY(57deg) translateX(300px) rotateZ(70deg);
  }
}
.c:nth-child(120) {
  animation: orbit120 14s infinite;
  animation-delay: 1.2s;
  background-color: #ff4400;
}

@keyframes orbit120 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-300deg) rotateY(128deg) translateX(100px) rotateZ(300deg);
  }
  80% {
    transform: rotateZ(-300deg) rotateY(128deg) translateX(100px) rotateZ(300deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-300deg) rotateY(128deg) translateX(300px) rotateZ(300deg);
  }
}
.c:nth-child(121) {
  animation: orbit121 14s infinite;
  animation-delay: 1.21s;
  background-color: orangered;
}

@keyframes orbit121 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-353deg) rotateY(97deg) translateX(100px) rotateZ(353deg);
  }
  80% {
    transform: rotateZ(-353deg) rotateY(97deg) translateX(100px) rotateZ(353deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-353deg) rotateY(97deg) translateX(300px) rotateZ(353deg);
  }
}
.c:nth-child(122) {
  animation: orbit122 14s infinite;
  animation-delay: 1.22s;
  background-color: orangered;
}

@keyframes orbit122 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-338deg) rotateY(190deg) translateX(100px) rotateZ(338deg);
  }
  80% {
    transform: rotateZ(-338deg) rotateY(190deg) translateX(100px) rotateZ(338deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-338deg) rotateY(190deg) translateX(300px) rotateZ(338deg);
  }
}
.c:nth-child(123) {
  animation: orbit123 14s infinite;
  animation-delay: 1.23s;
  background-color: #ff4600;
}

@keyframes orbit123 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-112deg) rotateY(49deg) translateX(100px) rotateZ(112deg);
  }
  80% {
    transform: rotateZ(-112deg) rotateY(49deg) translateX(100px) rotateZ(112deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-112deg) rotateY(49deg) translateX(300px) rotateZ(112deg);
  }
}
.c:nth-child(124) {
  animation: orbit124 14s infinite;
  animation-delay: 1.24s;
  background-color: #ff4600;
}

@keyframes orbit124 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-165deg) rotateY(15deg) translateX(100px) rotateZ(165deg);
  }
  80% {
    transform: rotateZ(-165deg) rotateY(15deg) translateX(100px) rotateZ(165deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-165deg) rotateY(15deg) translateX(300px) rotateZ(165deg);
  }
}
.c:nth-child(125) {
  animation: orbit125 14s infinite;
  animation-delay: 1.25s;
  background-color: #ff4700;
}

@keyframes orbit125 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-176deg) rotateY(188deg) translateX(100px) rotateZ(176deg);
  }
  80% {
    transform: rotateZ(-176deg) rotateY(188deg) translateX(100px) rotateZ(176deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-176deg) rotateY(188deg) translateX(300px) rotateZ(176deg);
  }
}
.c:nth-child(126) {
  animation: orbit126 14s infinite;
  animation-delay: 1.26s;
  background-color: #ff4700;
}

@keyframes orbit126 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-106deg) rotateY(147deg) translateX(100px) rotateZ(106deg);
  }
  80% {
    transform: rotateZ(-106deg) rotateY(147deg) translateX(100px) rotateZ(106deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-106deg) rotateY(147deg) translateX(300px) rotateZ(106deg);
  }
}
.c:nth-child(127) {
  animation: orbit127 14s infinite;
  animation-delay: 1.27s;
  background-color: #ff4800;
}

@keyframes orbit127 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-27deg) rotateY(239deg) translateX(100px) rotateZ(27deg);
  }
  80% {
    transform: rotateZ(-27deg) rotateY(239deg) translateX(100px) rotateZ(27deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-27deg) rotateY(239deg) translateX(300px) rotateZ(27deg);
  }
}
.c:nth-child(128) {
  animation: orbit128 14s infinite;
  animation-delay: 1.28s;
  background-color: #ff4900;
}

@keyframes orbit128 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-289deg) rotateY(162deg) translateX(100px) rotateZ(289deg);
  }
  80% {
    transform: rotateZ(-289deg) rotateY(162deg) translateX(100px) rotateZ(289deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-289deg) rotateY(162deg) translateX(300px) rotateZ(289deg);
  }
}
.c:nth-child(129) {
  animation: orbit129 14s infinite;
  animation-delay: 1.29s;
  background-color: #ff4900;
}

@keyframes orbit129 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-82deg) rotateY(52deg) translateX(100px) rotateZ(82deg);
  }
  80% {
    transform: rotateZ(-82deg) rotateY(52deg) translateX(100px) rotateZ(82deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-82deg) rotateY(52deg) translateX(300px) rotateZ(82deg);
  }
}
.c:nth-child(130) {
  animation: orbit130 14s infinite;
  animation-delay: 1.3s;
  background-color: #ff4a00;
}

@keyframes orbit130 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-200deg) rotateY(238deg) translateX(100px) rotateZ(200deg);
  }
  80% {
    transform: rotateZ(-200deg) rotateY(238deg) translateX(100px) rotateZ(200deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-200deg) rotateY(238deg) translateX(300px) rotateZ(200deg);
  }
}
.c:nth-child(131) {
  animation: orbit131 14s infinite;
  animation-delay: 1.31s;
  background-color: #ff4a00;
}

@keyframes orbit131 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-88deg) rotateY(360deg) translateX(100px) rotateZ(88deg);
  }
  80% {
    transform: rotateZ(-88deg) rotateY(360deg) translateX(100px) rotateZ(88deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-88deg) rotateY(360deg) translateX(300px) rotateZ(88deg);
  }
}
.c:nth-child(132) {
  animation: orbit132 14s infinite;
  animation-delay: 1.32s;
  background-color: #ff4b00;
}

@keyframes orbit132 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-47deg) rotateY(20deg) translateX(100px) rotateZ(47deg);
  }
  80% {
    transform: rotateZ(-47deg) rotateY(20deg) translateX(100px) rotateZ(47deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-47deg) rotateY(20deg) translateX(300px) rotateZ(47deg);
  }
}
.c:nth-child(133) {
  animation: orbit133 14s infinite;
  animation-delay: 1.33s;
  background-color: #ff4b00;
}

@keyframes orbit133 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-54deg) rotateY(295deg) translateX(100px) rotateZ(54deg);
  }
  80% {
    transform: rotateZ(-54deg) rotateY(295deg) translateX(100px) rotateZ(54deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-54deg) rotateY(295deg) translateX(300px) rotateZ(54deg);
  }
}
.c:nth-child(134) {
  animation: orbit134 14s infinite;
  animation-delay: 1.34s;
  background-color: #ff4c00;
}

@keyframes orbit134 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-150deg) rotateY(131deg) translateX(100px) rotateZ(150deg);
  }
  80% {
    transform: rotateZ(-150deg) rotateY(131deg) translateX(100px) rotateZ(150deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-150deg) rotateY(131deg) translateX(300px) rotateZ(150deg);
  }
}
.c:nth-child(135) {
  animation: orbit135 14s infinite;
  animation-delay: 1.35s;
  background-color: #ff4d00;
}

@keyframes orbit135 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-14deg) rotateY(249deg) translateX(100px) rotateZ(14deg);
  }
  80% {
    transform: rotateZ(-14deg) rotateY(249deg) translateX(100px) rotateZ(14deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-14deg) rotateY(249deg) translateX(300px) rotateZ(14deg);
  }
}
.c:nth-child(136) {
  animation: orbit136 14s infinite;
  animation-delay: 1.36s;
  background-color: #ff4d00;
}

@keyframes orbit136 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-138deg) rotateY(97deg) translateX(100px) rotateZ(138deg);
  }
  80% {
    transform: rotateZ(-138deg) rotateY(97deg) translateX(100px) rotateZ(138deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-138deg) rotateY(97deg) translateX(300px) rotateZ(138deg);
  }
}
.c:nth-child(137) {
  animation: orbit137 14s infinite;
  animation-delay: 1.37s;
  background-color: #ff4e00;
}

@keyframes orbit137 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-139deg) rotateY(305deg) translateX(100px) rotateZ(139deg);
  }
  80% {
    transform: rotateZ(-139deg) rotateY(305deg) translateX(100px) rotateZ(139deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-139deg) rotateY(305deg) translateX(300px) rotateZ(139deg);
  }
}
.c:nth-child(138) {
  animation: orbit138 14s infinite;
  animation-delay: 1.38s;
  background-color: #ff4e00;
}

@keyframes orbit138 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-270deg) rotateY(13deg) translateX(100px) rotateZ(270deg);
  }
  80% {
    transform: rotateZ(-270deg) rotateY(13deg) translateX(100px) rotateZ(270deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-270deg) rotateY(13deg) translateX(300px) rotateZ(270deg);
  }
}
.c:nth-child(139) {
  animation: orbit139 14s infinite;
  animation-delay: 1.39s;
  background-color: #ff4f00;
}

@keyframes orbit139 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-209deg) rotateY(184deg) translateX(100px) rotateZ(209deg);
  }
  80% {
    transform: rotateZ(-209deg) rotateY(184deg) translateX(100px) rotateZ(209deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-209deg) rotateY(184deg) translateX(300px) rotateZ(209deg);
  }
}
.c:nth-child(140) {
  animation: orbit140 14s infinite;
  animation-delay: 1.4s;
  background-color: #ff4f00;
}

@keyframes orbit140 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-5deg) rotateY(154deg) translateX(100px) rotateZ(5deg);
  }
  80% {
    transform: rotateZ(-5deg) rotateY(154deg) translateX(100px) rotateZ(5deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-5deg) rotateY(154deg) translateX(300px) rotateZ(5deg);
  }
}
.c:nth-child(141) {
  animation: orbit141 14s infinite;
  animation-delay: 1.41s;
  background-color: #ff5000;
}

@keyframes orbit141 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-62deg) rotateY(338deg) translateX(100px) rotateZ(62deg);
  }
  80% {
    transform: rotateZ(-62deg) rotateY(338deg) translateX(100px) rotateZ(62deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-62deg) rotateY(338deg) translateX(300px) rotateZ(62deg);
  }
}
.c:nth-child(142) {
  animation: orbit142 14s infinite;
  animation-delay: 1.42s;
  background-color: #ff5000;
}

@keyframes orbit142 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-75deg) rotateY(198deg) translateX(100px) rotateZ(75deg);
  }
  80% {
    transform: rotateZ(-75deg) rotateY(198deg) translateX(100px) rotateZ(75deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-75deg) rotateY(198deg) translateX(300px) rotateZ(75deg);
  }
}
.c:nth-child(143) {
  animation: orbit143 14s infinite;
  animation-delay: 1.43s;
  background-color: #ff5100;
}

@keyframes orbit143 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-266deg) rotateY(321deg) translateX(100px) rotateZ(266deg);
  }
  80% {
    transform: rotateZ(-266deg) rotateY(321deg) translateX(100px) rotateZ(266deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-266deg) rotateY(321deg) translateX(300px) rotateZ(266deg);
  }
}
.c:nth-child(144) {
  animation: orbit144 14s infinite;
  animation-delay: 1.44s;
  background-color: #ff5200;
}

@keyframes orbit144 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-269deg) rotateY(140deg) translateX(100px) rotateZ(269deg);
  }
  80% {
    transform: rotateZ(-269deg) rotateY(140deg) translateX(100px) rotateZ(269deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-269deg) rotateY(140deg) translateX(300px) rotateZ(269deg);
  }
}
.c:nth-child(145) {
  animation: orbit145 14s infinite;
  animation-delay: 1.45s;
  background-color: #ff5200;
}

@keyframes orbit145 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-280deg) rotateY(172deg) translateX(100px) rotateZ(280deg);
  }
  80% {
    transform: rotateZ(-280deg) rotateY(172deg) translateX(100px) rotateZ(280deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-280deg) rotateY(172deg) translateX(300px) rotateZ(280deg);
  }
}
.c:nth-child(146) {
  animation: orbit146 14s infinite;
  animation-delay: 1.46s;
  background-color: #ff5300;
}

@keyframes orbit146 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-210deg) rotateY(219deg) translateX(100px) rotateZ(210deg);
  }
  80% {
    transform: rotateZ(-210deg) rotateY(219deg) translateX(100px) rotateZ(210deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-210deg) rotateY(219deg) translateX(300px) rotateZ(210deg);
  }
}
.c:nth-child(147) {
  animation: orbit147 14s infinite;
  animation-delay: 1.47s;
  background-color: #ff5300;
}

@keyframes orbit147 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-109deg) rotateY(290deg) translateX(100px) rotateZ(109deg);
  }
  80% {
    transform: rotateZ(-109deg) rotateY(290deg) translateX(100px) rotateZ(109deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-109deg) rotateY(290deg) translateX(300px) rotateZ(109deg);
  }
}
.c:nth-child(148) {
  animation: orbit148 14s infinite;
  animation-delay: 1.48s;
  background-color: #ff5400;
}

@keyframes orbit148 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-107deg) rotateY(7deg) translateX(100px) rotateZ(107deg);
  }
  80% {
    transform: rotateZ(-107deg) rotateY(7deg) translateX(100px) rotateZ(107deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-107deg) rotateY(7deg) translateX(300px) rotateZ(107deg);
  }
}
.c:nth-child(149) {
  animation: orbit149 14s infinite;
  animation-delay: 1.49s;
  background-color: #ff5400;
}

@keyframes orbit149 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-145deg) rotateY(237deg) translateX(100px) rotateZ(145deg);
  }
  80% {
    transform: rotateZ(-145deg) rotateY(237deg) translateX(100px) rotateZ(145deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-145deg) rotateY(237deg) translateX(300px) rotateZ(145deg);
  }
}
.c:nth-child(150) {
  animation: orbit150 14s infinite;
  animation-delay: 1.5s;
  background-color: #ff5500;
}

@keyframes orbit150 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-167deg) rotateY(192deg) translateX(100px) rotateZ(167deg);
  }
  80% {
    transform: rotateZ(-167deg) rotateY(192deg) translateX(100px) rotateZ(167deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-167deg) rotateY(192deg) translateX(300px) rotateZ(167deg);
  }
}
.c:nth-child(151) {
  animation: orbit151 14s infinite;
  animation-delay: 1.51s;
  background-color: #ff5600;
}

@keyframes orbit151 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-139deg) rotateY(179deg) translateX(100px) rotateZ(139deg);
  }
  80% {
    transform: rotateZ(-139deg) rotateY(179deg) translateX(100px) rotateZ(139deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-139deg) rotateY(179deg) translateX(300px) rotateZ(139deg);
  }
}
.c:nth-child(152) {
  animation: orbit152 14s infinite;
  animation-delay: 1.52s;
  background-color: #ff5600;
}

@keyframes orbit152 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-168deg) rotateY(176deg) translateX(100px) rotateZ(168deg);
  }
  80% {
    transform: rotateZ(-168deg) rotateY(176deg) translateX(100px) rotateZ(168deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-168deg) rotateY(176deg) translateX(300px) rotateZ(168deg);
  }
}
.c:nth-child(153) {
  animation: orbit153 14s infinite;
  animation-delay: 1.53s;
  background-color: #ff5700;
}

@keyframes orbit153 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-109deg) rotateY(257deg) translateX(100px) rotateZ(109deg);
  }
  80% {
    transform: rotateZ(-109deg) rotateY(257deg) translateX(100px) rotateZ(109deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-109deg) rotateY(257deg) translateX(300px) rotateZ(109deg);
  }
}
.c:nth-child(154) {
  animation: orbit154 14s infinite;
  animation-delay: 1.54s;
  background-color: #ff5700;
}

@keyframes orbit154 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-254deg) rotateY(78deg) translateX(100px) rotateZ(254deg);
  }
  80% {
    transform: rotateZ(-254deg) rotateY(78deg) translateX(100px) rotateZ(254deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-254deg) rotateY(78deg) translateX(300px) rotateZ(254deg);
  }
}
.c:nth-child(155) {
  animation: orbit155 14s infinite;
  animation-delay: 1.55s;
  background-color: #ff5800;
}

@keyframes orbit155 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-196deg) rotateY(9deg) translateX(100px) rotateZ(196deg);
  }
  80% {
    transform: rotateZ(-196deg) rotateY(9deg) translateX(100px) rotateZ(196deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-196deg) rotateY(9deg) translateX(300px) rotateZ(196deg);
  }
}
.c:nth-child(156) {
  animation: orbit156 14s infinite;
  animation-delay: 1.56s;
  background-color: #ff5800;
}

@keyframes orbit156 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-161deg) rotateY(77deg) translateX(100px) rotateZ(161deg);
  }
  80% {
    transform: rotateZ(-161deg) rotateY(77deg) translateX(100px) rotateZ(161deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-161deg) rotateY(77deg) translateX(300px) rotateZ(161deg);
  }
}
.c:nth-child(157) {
  animation: orbit157 14s infinite;
  animation-delay: 1.57s;
  background-color: #ff5900;
}

@keyframes orbit157 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-130deg) rotateY(73deg) translateX(100px) rotateZ(130deg);
  }
  80% {
    transform: rotateZ(-130deg) rotateY(73deg) translateX(100px) rotateZ(130deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-130deg) rotateY(73deg) translateX(300px) rotateZ(130deg);
  }
}
.c:nth-child(158) {
  animation: orbit158 14s infinite;
  animation-delay: 1.58s;
  background-color: #ff5a00;
}

@keyframes orbit158 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-226deg) rotateY(154deg) translateX(100px) rotateZ(226deg);
  }
  80% {
    transform: rotateZ(-226deg) rotateY(154deg) translateX(100px) rotateZ(226deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-226deg) rotateY(154deg) translateX(300px) rotateZ(226deg);
  }
}
.c:nth-child(159) {
  animation: orbit159 14s infinite;
  animation-delay: 1.59s;
  background-color: #ff5a00;
}

@keyframes orbit159 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-172deg) rotateY(156deg) translateX(100px) rotateZ(172deg);
  }
  80% {
    transform: rotateZ(-172deg) rotateY(156deg) translateX(100px) rotateZ(172deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-172deg) rotateY(156deg) translateX(300px) rotateZ(172deg);
  }
}
.c:nth-child(160) {
  animation: orbit160 14s infinite;
  animation-delay: 1.6s;
  background-color: #ff5b00;
}

@keyframes orbit160 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-74deg) rotateY(242deg) translateX(100px) rotateZ(74deg);
  }
  80% {
    transform: rotateZ(-74deg) rotateY(242deg) translateX(100px) rotateZ(74deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-74deg) rotateY(242deg) translateX(300px) rotateZ(74deg);
  }
}
.c:nth-child(161) {
  animation: orbit161 14s infinite;
  animation-delay: 1.61s;
  background-color: #ff5b00;
}

@keyframes orbit161 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-225deg) rotateY(224deg) translateX(100px) rotateZ(225deg);
  }
  80% {
    transform: rotateZ(-225deg) rotateY(224deg) translateX(100px) rotateZ(225deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-225deg) rotateY(224deg) translateX(300px) rotateZ(225deg);
  }
}
.c:nth-child(162) {
  animation: orbit162 14s infinite;
  animation-delay: 1.62s;
  background-color: #ff5c00;
}

@keyframes orbit162 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-41deg) rotateY(270deg) translateX(100px) rotateZ(41deg);
  }
  80% {
    transform: rotateZ(-41deg) rotateY(270deg) translateX(100px) rotateZ(41deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-41deg) rotateY(270deg) translateX(300px) rotateZ(41deg);
  }
}
.c:nth-child(163) {
  animation: orbit163 14s infinite;
  animation-delay: 1.63s;
  background-color: #ff5c00;
}

@keyframes orbit163 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-255deg) rotateY(37deg) translateX(100px) rotateZ(255deg);
  }
  80% {
    transform: rotateZ(-255deg) rotateY(37deg) translateX(100px) rotateZ(255deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-255deg) rotateY(37deg) translateX(300px) rotateZ(255deg);
  }
}
.c:nth-child(164) {
  animation: orbit164 14s infinite;
  animation-delay: 1.64s;
  background-color: #ff5d00;
}

@keyframes orbit164 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-84deg) rotateY(324deg) translateX(100px) rotateZ(84deg);
  }
  80% {
    transform: rotateZ(-84deg) rotateY(324deg) translateX(100px) rotateZ(84deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-84deg) rotateY(324deg) translateX(300px) rotateZ(84deg);
  }
}
.c:nth-child(165) {
  animation: orbit165 14s infinite;
  animation-delay: 1.65s;
  background-color: #ff5e00;
}

@keyframes orbit165 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-300deg) rotateY(92deg) translateX(100px) rotateZ(300deg);
  }
  80% {
    transform: rotateZ(-300deg) rotateY(92deg) translateX(100px) rotateZ(300deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-300deg) rotateY(92deg) translateX(300px) rotateZ(300deg);
  }
}
.c:nth-child(166) {
  animation: orbit166 14s infinite;
  animation-delay: 1.66s;
  background-color: #ff5e00;
}

@keyframes orbit166 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-189deg) rotateY(294deg) translateX(100px) rotateZ(189deg);
  }
  80% {
    transform: rotateZ(-189deg) rotateY(294deg) translateX(100px) rotateZ(189deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-189deg) rotateY(294deg) translateX(300px) rotateZ(189deg);
  }
}
.c:nth-child(167) {
  animation: orbit167 14s infinite;
  animation-delay: 1.67s;
  background-color: #ff5f00;
}

@keyframes orbit167 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-58deg) rotateY(38deg) translateX(100px) rotateZ(58deg);
  }
  80% {
    transform: rotateZ(-58deg) rotateY(38deg) translateX(100px) rotateZ(58deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-58deg) rotateY(38deg) translateX(300px) rotateZ(58deg);
  }
}
.c:nth-child(168) {
  animation: orbit168 14s infinite;
  animation-delay: 1.68s;
  background-color: #ff5f00;
}

@keyframes orbit168 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-300deg) rotateY(219deg) translateX(100px) rotateZ(300deg);
  }
  80% {
    transform: rotateZ(-300deg) rotateY(219deg) translateX(100px) rotateZ(300deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-300deg) rotateY(219deg) translateX(300px) rotateZ(300deg);
  }
}
.c:nth-child(169) {
  animation: orbit169 14s infinite;
  animation-delay: 1.69s;
  background-color: #ff6000;
}

@keyframes orbit169 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-292deg) rotateY(79deg) translateX(100px) rotateZ(292deg);
  }
  80% {
    transform: rotateZ(-292deg) rotateY(79deg) translateX(100px) rotateZ(292deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-292deg) rotateY(79deg) translateX(300px) rotateZ(292deg);
  }
}
.c:nth-child(170) {
  animation: orbit170 14s infinite;
  animation-delay: 1.7s;
  background-color: #ff6000;
}

@keyframes orbit170 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-335deg) rotateY(212deg) translateX(100px) rotateZ(335deg);
  }
  80% {
    transform: rotateZ(-335deg) rotateY(212deg) translateX(100px) rotateZ(335deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-335deg) rotateY(212deg) translateX(300px) rotateZ(335deg);
  }
}
.c:nth-child(171) {
  animation: orbit171 14s infinite;
  animation-delay: 1.71s;
  background-color: #ff6100;
}

@keyframes orbit171 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-219deg) rotateY(329deg) translateX(100px) rotateZ(219deg);
  }
  80% {
    transform: rotateZ(-219deg) rotateY(329deg) translateX(100px) rotateZ(219deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-219deg) rotateY(329deg) translateX(300px) rotateZ(219deg);
  }
}
.c:nth-child(172) {
  animation: orbit172 14s infinite;
  animation-delay: 1.72s;
  background-color: #ff6100;
}

@keyframes orbit172 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-154deg) rotateY(177deg) translateX(100px) rotateZ(154deg);
  }
  80% {
    transform: rotateZ(-154deg) rotateY(177deg) translateX(100px) rotateZ(154deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-154deg) rotateY(177deg) translateX(300px) rotateZ(154deg);
  }
}
.c:nth-child(173) {
  animation: orbit173 14s infinite;
  animation-delay: 1.73s;
  background-color: #ff6200;
}

@keyframes orbit173 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-248deg) rotateY(182deg) translateX(100px) rotateZ(248deg);
  }
  80% {
    transform: rotateZ(-248deg) rotateY(182deg) translateX(100px) rotateZ(248deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-248deg) rotateY(182deg) translateX(300px) rotateZ(248deg);
  }
}
.c:nth-child(174) {
  animation: orbit174 14s infinite;
  animation-delay: 1.74s;
  background-color: #ff6300;
}

@keyframes orbit174 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-56deg) rotateY(244deg) translateX(100px) rotateZ(56deg);
  }
  80% {
    transform: rotateZ(-56deg) rotateY(244deg) translateX(100px) rotateZ(56deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-56deg) rotateY(244deg) translateX(300px) rotateZ(56deg);
  }
}
.c:nth-child(175) {
  animation: orbit175 14s infinite;
  animation-delay: 1.75s;
  background-color: #ff6300;
}

@keyframes orbit175 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-155deg) rotateY(231deg) translateX(100px) rotateZ(155deg);
  }
  80% {
    transform: rotateZ(-155deg) rotateY(231deg) translateX(100px) rotateZ(155deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-155deg) rotateY(231deg) translateX(300px) rotateZ(155deg);
  }
}
.c:nth-child(176) {
  animation: orbit176 14s infinite;
  animation-delay: 1.76s;
  background-color: #ff6400;
}

@keyframes orbit176 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-219deg) rotateY(143deg) translateX(100px) rotateZ(219deg);
  }
  80% {
    transform: rotateZ(-219deg) rotateY(143deg) translateX(100px) rotateZ(219deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-219deg) rotateY(143deg) translateX(300px) rotateZ(219deg);
  }
}
.c:nth-child(177) {
  animation: orbit177 14s infinite;
  animation-delay: 1.77s;
  background-color: #ff6400;
}

@keyframes orbit177 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-346deg) rotateY(123deg) translateX(100px) rotateZ(346deg);
  }
  80% {
    transform: rotateZ(-346deg) rotateY(123deg) translateX(100px) rotateZ(346deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-346deg) rotateY(123deg) translateX(300px) rotateZ(346deg);
  }
}
.c:nth-child(178) {
  animation: orbit178 14s infinite;
  animation-delay: 1.78s;
  background-color: #ff6500;
}

@keyframes orbit178 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-238deg) rotateY(309deg) translateX(100px) rotateZ(238deg);
  }
  80% {
    transform: rotateZ(-238deg) rotateY(309deg) translateX(100px) rotateZ(238deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-238deg) rotateY(309deg) translateX(300px) rotateZ(238deg);
  }
}
.c:nth-child(179) {
  animation: orbit179 14s infinite;
  animation-delay: 1.79s;
  background-color: #ff6500;
}

@keyframes orbit179 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-285deg) rotateY(141deg) translateX(100px) rotateZ(285deg);
  }
  80% {
    transform: rotateZ(-285deg) rotateY(141deg) translateX(100px) rotateZ(285deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-285deg) rotateY(141deg) translateX(300px) rotateZ(285deg);
  }
}
.c:nth-child(180) {
  animation: orbit180 14s infinite;
  animation-delay: 1.8s;
  background-color: #ff6600;
}

@keyframes orbit180 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-323deg) rotateY(230deg) translateX(100px) rotateZ(323deg);
  }
  80% {
    transform: rotateZ(-323deg) rotateY(230deg) translateX(100px) rotateZ(323deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-323deg) rotateY(230deg) translateX(300px) rotateZ(323deg);
  }
}
.c:nth-child(181) {
  animation: orbit181 14s infinite;
  animation-delay: 1.81s;
  background-color: #ff6700;
}

@keyframes orbit181 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-134deg) rotateY(158deg) translateX(100px) rotateZ(134deg);
  }
  80% {
    transform: rotateZ(-134deg) rotateY(158deg) translateX(100px) rotateZ(134deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-134deg) rotateY(158deg) translateX(300px) rotateZ(134deg);
  }
}
.c:nth-child(182) {
  animation: orbit182 14s infinite;
  animation-delay: 1.82s;
  background-color: #ff6700;
}

@keyframes orbit182 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-1deg) rotateY(119deg) translateX(100px) rotateZ(1deg);
  }
  80% {
    transform: rotateZ(-1deg) rotateY(119deg) translateX(100px) rotateZ(1deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-1deg) rotateY(119deg) translateX(300px) rotateZ(1deg);
  }
}
.c:nth-child(183) {
  animation: orbit183 14s infinite;
  animation-delay: 1.83s;
  background-color: #ff6800;
}

@keyframes orbit183 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-336deg) rotateY(10deg) translateX(100px) rotateZ(336deg);
  }
  80% {
    transform: rotateZ(-336deg) rotateY(10deg) translateX(100px) rotateZ(336deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-336deg) rotateY(10deg) translateX(300px) rotateZ(336deg);
  }
}
.c:nth-child(184) {
  animation: orbit184 14s infinite;
  animation-delay: 1.84s;
  background-color: #ff6800;
}

@keyframes orbit184 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-319deg) rotateY(273deg) translateX(100px) rotateZ(319deg);
  }
  80% {
    transform: rotateZ(-319deg) rotateY(273deg) translateX(100px) rotateZ(319deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-319deg) rotateY(273deg) translateX(300px) rotateZ(319deg);
  }
}
.c:nth-child(185) {
  animation: orbit185 14s infinite;
  animation-delay: 1.85s;
  background-color: #ff6900;
}

@keyframes orbit185 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-272deg) rotateY(331deg) translateX(100px) rotateZ(272deg);
  }
  80% {
    transform: rotateZ(-272deg) rotateY(331deg) translateX(100px) rotateZ(272deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-272deg) rotateY(331deg) translateX(300px) rotateZ(272deg);
  }
}
.c:nth-child(186) {
  animation: orbit186 14s infinite;
  animation-delay: 1.86s;
  background-color: #ff6900;
}

@keyframes orbit186 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-139deg) rotateY(181deg) translateX(100px) rotateZ(139deg);
  }
  80% {
    transform: rotateZ(-139deg) rotateY(181deg) translateX(100px) rotateZ(139deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-139deg) rotateY(181deg) translateX(300px) rotateZ(139deg);
  }
}
.c:nth-child(187) {
  animation: orbit187 14s infinite;
  animation-delay: 1.87s;
  background-color: #ff6a00;
}

@keyframes orbit187 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-290deg) rotateY(246deg) translateX(100px) rotateZ(290deg);
  }
  80% {
    transform: rotateZ(-290deg) rotateY(246deg) translateX(100px) rotateZ(290deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-290deg) rotateY(246deg) translateX(300px) rotateZ(290deg);
  }
}
.c:nth-child(188) {
  animation: orbit188 14s infinite;
  animation-delay: 1.88s;
  background-color: #ff6b00;
}

@keyframes orbit188 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-356deg) rotateY(171deg) translateX(100px) rotateZ(356deg);
  }
  80% {
    transform: rotateZ(-356deg) rotateY(171deg) translateX(100px) rotateZ(356deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-356deg) rotateY(171deg) translateX(300px) rotateZ(356deg);
  }
}
.c:nth-child(189) {
  animation: orbit189 14s infinite;
  animation-delay: 1.89s;
  background-color: #ff6b00;
}

@keyframes orbit189 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-80deg) rotateY(108deg) translateX(100px) rotateZ(80deg);
  }
  80% {
    transform: rotateZ(-80deg) rotateY(108deg) translateX(100px) rotateZ(80deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-80deg) rotateY(108deg) translateX(300px) rotateZ(80deg);
  }
}
.c:nth-child(190) {
  animation: orbit190 14s infinite;
  animation-delay: 1.9s;
  background-color: #ff6c00;
}

@keyframes orbit190 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-171deg) rotateY(337deg) translateX(100px) rotateZ(171deg);
  }
  80% {
    transform: rotateZ(-171deg) rotateY(337deg) translateX(100px) rotateZ(171deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-171deg) rotateY(337deg) translateX(300px) rotateZ(171deg);
  }
}
.c:nth-child(191) {
  animation: orbit191 14s infinite;
  animation-delay: 1.91s;
  background-color: #ff6c00;
}

@keyframes orbit191 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-6deg) rotateY(130deg) translateX(100px) rotateZ(6deg);
  }
  80% {
    transform: rotateZ(-6deg) rotateY(130deg) translateX(100px) rotateZ(6deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-6deg) rotateY(130deg) translateX(300px) rotateZ(6deg);
  }
}
.c:nth-child(192) {
  animation: orbit192 14s infinite;
  animation-delay: 1.92s;
  background-color: #ff6d00;
}

@keyframes orbit192 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-122deg) rotateY(105deg) translateX(100px) rotateZ(122deg);
  }
  80% {
    transform: rotateZ(-122deg) rotateY(105deg) translateX(100px) rotateZ(122deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-122deg) rotateY(105deg) translateX(300px) rotateZ(122deg);
  }
}
.c:nth-child(193) {
  animation: orbit193 14s infinite;
  animation-delay: 1.93s;
  background-color: #ff6d00;
}

@keyframes orbit193 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-111deg) rotateY(31deg) translateX(100px) rotateZ(111deg);
  }
  80% {
    transform: rotateZ(-111deg) rotateY(31deg) translateX(100px) rotateZ(111deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-111deg) rotateY(31deg) translateX(300px) rotateZ(111deg);
  }
}
.c:nth-child(194) {
  animation: orbit194 14s infinite;
  animation-delay: 1.94s;
  background-color: #ff6e00;
}

@keyframes orbit194 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-94deg) rotateY(51deg) translateX(100px) rotateZ(94deg);
  }
  80% {
    transform: rotateZ(-94deg) rotateY(51deg) translateX(100px) rotateZ(94deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-94deg) rotateY(51deg) translateX(300px) rotateZ(94deg);
  }
}
.c:nth-child(195) {
  animation: orbit195 14s infinite;
  animation-delay: 1.95s;
  background-color: #ff6f00;
}

@keyframes orbit195 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-23deg) rotateY(244deg) translateX(100px) rotateZ(23deg);
  }
  80% {
    transform: rotateZ(-23deg) rotateY(244deg) translateX(100px) rotateZ(23deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-23deg) rotateY(244deg) translateX(300px) rotateZ(23deg);
  }
}
.c:nth-child(196) {
  animation: orbit196 14s infinite;
  animation-delay: 1.96s;
  background-color: #ff6f00;
}

@keyframes orbit196 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-123deg) rotateY(241deg) translateX(100px) rotateZ(123deg);
  }
  80% {
    transform: rotateZ(-123deg) rotateY(241deg) translateX(100px) rotateZ(123deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-123deg) rotateY(241deg) translateX(300px) rotateZ(123deg);
  }
}
.c:nth-child(197) {
  animation: orbit197 14s infinite;
  animation-delay: 1.97s;
  background-color: #ff7000;
}

@keyframes orbit197 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-216deg) rotateY(250deg) translateX(100px) rotateZ(216deg);
  }
  80% {
    transform: rotateZ(-216deg) rotateY(250deg) translateX(100px) rotateZ(216deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-216deg) rotateY(250deg) translateX(300px) rotateZ(216deg);
  }
}
.c:nth-child(198) {
  animation: orbit198 14s infinite;
  animation-delay: 1.98s;
  background-color: #ff7000;
}

@keyframes orbit198 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-174deg) rotateY(358deg) translateX(100px) rotateZ(174deg);
  }
  80% {
    transform: rotateZ(-174deg) rotateY(358deg) translateX(100px) rotateZ(174deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-174deg) rotateY(358deg) translateX(300px) rotateZ(174deg);
  }
}
.c:nth-child(199) {
  animation: orbit199 14s infinite;
  animation-delay: 1.99s;
  background-color: #ff7100;
}

@keyframes orbit199 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-196deg) rotateY(144deg) translateX(100px) rotateZ(196deg);
  }
  80% {
    transform: rotateZ(-196deg) rotateY(144deg) translateX(100px) rotateZ(196deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-196deg) rotateY(144deg) translateX(300px) rotateZ(196deg);
  }
}
.c:nth-child(200) {
  animation: orbit200 14s infinite;
  animation-delay: 2s;
  background-color: #ff7100;
}

@keyframes orbit200 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-244deg) rotateY(172deg) translateX(100px) rotateZ(244deg);
  }
  80% {
    transform: rotateZ(-244deg) rotateY(172deg) translateX(100px) rotateZ(244deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-244deg) rotateY(172deg) translateX(300px) rotateZ(244deg);
  }
}
.c:nth-child(201) {
  animation: orbit201 14s infinite;
  animation-delay: 2.01s;
  background-color: #ff7200;
}

@keyframes orbit201 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-120deg) rotateY(169deg) translateX(100px) rotateZ(120deg);
  }
  80% {
    transform: rotateZ(-120deg) rotateY(169deg) translateX(100px) rotateZ(120deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-120deg) rotateY(169deg) translateX(300px) rotateZ(120deg);
  }
}
.c:nth-child(202) {
  animation: orbit202 14s infinite;
  animation-delay: 2.02s;
  background-color: #ff7200;
}

@keyframes orbit202 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-17deg) rotateY(310deg) translateX(100px) rotateZ(17deg);
  }
  80% {
    transform: rotateZ(-17deg) rotateY(310deg) translateX(100px) rotateZ(17deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-17deg) rotateY(310deg) translateX(300px) rotateZ(17deg);
  }
}
.c:nth-child(203) {
  animation: orbit203 14s infinite;
  animation-delay: 2.03s;
  background-color: #ff7300;
}

@keyframes orbit203 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-188deg) rotateY(148deg) translateX(100px) rotateZ(188deg);
  }
  80% {
    transform: rotateZ(-188deg) rotateY(148deg) translateX(100px) rotateZ(188deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-188deg) rotateY(148deg) translateX(300px) rotateZ(188deg);
  }
}
.c:nth-child(204) {
  animation: orbit204 14s infinite;
  animation-delay: 2.04s;
  background-color: #ff7400;
}

@keyframes orbit204 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-112deg) rotateY(339deg) translateX(100px) rotateZ(112deg);
  }
  80% {
    transform: rotateZ(-112deg) rotateY(339deg) translateX(100px) rotateZ(112deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-112deg) rotateY(339deg) translateX(300px) rotateZ(112deg);
  }
}
.c:nth-child(205) {
  animation: orbit205 14s infinite;
  animation-delay: 2.05s;
  background-color: #ff7400;
}

@keyframes orbit205 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-88deg) rotateY(28deg) translateX(100px) rotateZ(88deg);
  }
  80% {
    transform: rotateZ(-88deg) rotateY(28deg) translateX(100px) rotateZ(88deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-88deg) rotateY(28deg) translateX(300px) rotateZ(88deg);
  }
}
.c:nth-child(206) {
  animation: orbit206 14s infinite;
  animation-delay: 2.06s;
  background-color: #ff7500;
}

@keyframes orbit206 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-237deg) rotateY(204deg) translateX(100px) rotateZ(237deg);
  }
  80% {
    transform: rotateZ(-237deg) rotateY(204deg) translateX(100px) rotateZ(237deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-237deg) rotateY(204deg) translateX(300px) rotateZ(237deg);
  }
}
.c:nth-child(207) {
  animation: orbit207 14s infinite;
  animation-delay: 2.07s;
  background-color: #ff7500;
}

@keyframes orbit207 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-264deg) rotateY(147deg) translateX(100px) rotateZ(264deg);
  }
  80% {
    transform: rotateZ(-264deg) rotateY(147deg) translateX(100px) rotateZ(264deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-264deg) rotateY(147deg) translateX(300px) rotateZ(264deg);
  }
}
.c:nth-child(208) {
  animation: orbit208 14s infinite;
  animation-delay: 2.08s;
  background-color: #ff7600;
}

@keyframes orbit208 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-282deg) rotateY(344deg) translateX(100px) rotateZ(282deg);
  }
  80% {
    transform: rotateZ(-282deg) rotateY(344deg) translateX(100px) rotateZ(282deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-282deg) rotateY(344deg) translateX(300px) rotateZ(282deg);
  }
}
.c:nth-child(209) {
  animation: orbit209 14s infinite;
  animation-delay: 2.09s;
  background-color: #ff7600;
}

@keyframes orbit209 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-31deg) rotateY(70deg) translateX(100px) rotateZ(31deg);
  }
  80% {
    transform: rotateZ(-31deg) rotateY(70deg) translateX(100px) rotateZ(31deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-31deg) rotateY(70deg) translateX(300px) rotateZ(31deg);
  }
}
.c:nth-child(210) {
  animation: orbit210 14s infinite;
  animation-delay: 2.1s;
  background-color: #ff7700;
}

@keyframes orbit210 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-288deg) rotateY(223deg) translateX(100px) rotateZ(288deg);
  }
  80% {
    transform: rotateZ(-288deg) rotateY(223deg) translateX(100px) rotateZ(288deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-288deg) rotateY(223deg) translateX(300px) rotateZ(288deg);
  }
}
.c:nth-child(211) {
  animation: orbit211 14s infinite;
  animation-delay: 2.11s;
  background-color: #ff7800;
}

@keyframes orbit211 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-327deg) rotateY(251deg) translateX(100px) rotateZ(327deg);
  }
  80% {
    transform: rotateZ(-327deg) rotateY(251deg) translateX(100px) rotateZ(327deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-327deg) rotateY(251deg) translateX(300px) rotateZ(327deg);
  }
}
.c:nth-child(212) {
  animation: orbit212 14s infinite;
  animation-delay: 2.12s;
  background-color: #ff7800;
}

@keyframes orbit212 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-20deg) rotateY(258deg) translateX(100px) rotateZ(20deg);
  }
  80% {
    transform: rotateZ(-20deg) rotateY(258deg) translateX(100px) rotateZ(20deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-20deg) rotateY(258deg) translateX(300px) rotateZ(20deg);
  }
}
.c:nth-child(213) {
  animation: orbit213 14s infinite;
  animation-delay: 2.13s;
  background-color: #ff7900;
}

@keyframes orbit213 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-272deg) rotateY(252deg) translateX(100px) rotateZ(272deg);
  }
  80% {
    transform: rotateZ(-272deg) rotateY(252deg) translateX(100px) rotateZ(272deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-272deg) rotateY(252deg) translateX(300px) rotateZ(272deg);
  }
}
.c:nth-child(214) {
  animation: orbit214 14s infinite;
  animation-delay: 2.14s;
  background-color: #ff7900;
}

@keyframes orbit214 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-300deg) rotateY(152deg) translateX(100px) rotateZ(300deg);
  }
  80% {
    transform: rotateZ(-300deg) rotateY(152deg) translateX(100px) rotateZ(300deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-300deg) rotateY(152deg) translateX(300px) rotateZ(300deg);
  }
}
.c:nth-child(215) {
  animation: orbit215 14s infinite;
  animation-delay: 2.15s;
  background-color: #ff7a00;
}

@keyframes orbit215 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-54deg) rotateY(199deg) translateX(100px) rotateZ(54deg);
  }
  80% {
    transform: rotateZ(-54deg) rotateY(199deg) translateX(100px) rotateZ(54deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-54deg) rotateY(199deg) translateX(300px) rotateZ(54deg);
  }
}
.c:nth-child(216) {
  animation: orbit216 14s infinite;
  animation-delay: 2.16s;
  background-color: #ff7a00;
}

@keyframes orbit216 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-56deg) rotateY(345deg) translateX(100px) rotateZ(56deg);
  }
  80% {
    transform: rotateZ(-56deg) rotateY(345deg) translateX(100px) rotateZ(56deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-56deg) rotateY(345deg) translateX(300px) rotateZ(56deg);
  }
}
.c:nth-child(217) {
  animation: orbit217 14s infinite;
  animation-delay: 2.17s;
  background-color: #ff7b00;
}

@keyframes orbit217 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-150deg) rotateY(79deg) translateX(100px) rotateZ(150deg);
  }
  80% {
    transform: rotateZ(-150deg) rotateY(79deg) translateX(100px) rotateZ(150deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-150deg) rotateY(79deg) translateX(300px) rotateZ(150deg);
  }
}
.c:nth-child(218) {
  animation: orbit218 14s infinite;
  animation-delay: 2.18s;
  background-color: #ff7c00;
}

@keyframes orbit218 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-34deg) rotateY(203deg) translateX(100px) rotateZ(34deg);
  }
  80% {
    transform: rotateZ(-34deg) rotateY(203deg) translateX(100px) rotateZ(34deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-34deg) rotateY(203deg) translateX(300px) rotateZ(34deg);
  }
}
.c:nth-child(219) {
  animation: orbit219 14s infinite;
  animation-delay: 2.19s;
  background-color: #ff7c00;
}

@keyframes orbit219 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-196deg) rotateY(207deg) translateX(100px) rotateZ(196deg);
  }
  80% {
    transform: rotateZ(-196deg) rotateY(207deg) translateX(100px) rotateZ(196deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-196deg) rotateY(207deg) translateX(300px) rotateZ(196deg);
  }
}
.c:nth-child(220) {
  animation: orbit220 14s infinite;
  animation-delay: 2.2s;
  background-color: #ff7d00;
}

@keyframes orbit220 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-160deg) rotateY(314deg) translateX(100px) rotateZ(160deg);
  }
  80% {
    transform: rotateZ(-160deg) rotateY(314deg) translateX(100px) rotateZ(160deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-160deg) rotateY(314deg) translateX(300px) rotateZ(160deg);
  }
}
.c:nth-child(221) {
  animation: orbit221 14s infinite;
  animation-delay: 2.21s;
  background-color: #ff7d00;
}

@keyframes orbit221 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-332deg) rotateY(159deg) translateX(100px) rotateZ(332deg);
  }
  80% {
    transform: rotateZ(-332deg) rotateY(159deg) translateX(100px) rotateZ(332deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-332deg) rotateY(159deg) translateX(300px) rotateZ(332deg);
  }
}
.c:nth-child(222) {
  animation: orbit222 14s infinite;
  animation-delay: 2.22s;
  background-color: #ff7e00;
}

@keyframes orbit222 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-336deg) rotateY(210deg) translateX(100px) rotateZ(336deg);
  }
  80% {
    transform: rotateZ(-336deg) rotateY(210deg) translateX(100px) rotateZ(336deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-336deg) rotateY(210deg) translateX(300px) rotateZ(336deg);
  }
}
.c:nth-child(223) {
  animation: orbit223 14s infinite;
  animation-delay: 2.23s;
  background-color: #ff7e00;
}

@keyframes orbit223 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-9deg) rotateY(151deg) translateX(100px) rotateZ(9deg);
  }
  80% {
    transform: rotateZ(-9deg) rotateY(151deg) translateX(100px) rotateZ(9deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-9deg) rotateY(151deg) translateX(300px) rotateZ(9deg);
  }
}
.c:nth-child(224) {
  animation: orbit224 14s infinite;
  animation-delay: 2.24s;
  background-color: #ff7f00;
}

@keyframes orbit224 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-144deg) rotateY(212deg) translateX(100px) rotateZ(144deg);
  }
  80% {
    transform: rotateZ(-144deg) rotateY(212deg) translateX(100px) rotateZ(144deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-144deg) rotateY(212deg) translateX(300px) rotateZ(144deg);
  }
}
.c:nth-child(225) {
  animation: orbit225 14s infinite;
  animation-delay: 2.25s;
  background-color: #ff8000;
}

@keyframes orbit225 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-103deg) rotateY(221deg) translateX(100px) rotateZ(103deg);
  }
  80% {
    transform: rotateZ(-103deg) rotateY(221deg) translateX(100px) rotateZ(103deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-103deg) rotateY(221deg) translateX(300px) rotateZ(103deg);
  }
}
.c:nth-child(226) {
  animation: orbit226 14s infinite;
  animation-delay: 2.26s;
  background-color: #ff8000;
}

@keyframes orbit226 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-69deg) rotateY(290deg) translateX(100px) rotateZ(69deg);
  }
  80% {
    transform: rotateZ(-69deg) rotateY(290deg) translateX(100px) rotateZ(69deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-69deg) rotateY(290deg) translateX(300px) rotateZ(69deg);
  }
}
.c:nth-child(227) {
  animation: orbit227 14s infinite;
  animation-delay: 2.27s;
  background-color: #ff8100;
}

@keyframes orbit227 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-236deg) rotateY(305deg) translateX(100px) rotateZ(236deg);
  }
  80% {
    transform: rotateZ(-236deg) rotateY(305deg) translateX(100px) rotateZ(236deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-236deg) rotateY(305deg) translateX(300px) rotateZ(236deg);
  }
}
.c:nth-child(228) {
  animation: orbit228 14s infinite;
  animation-delay: 2.28s;
  background-color: #ff8100;
}

@keyframes orbit228 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-34deg) rotateY(227deg) translateX(100px) rotateZ(34deg);
  }
  80% {
    transform: rotateZ(-34deg) rotateY(227deg) translateX(100px) rotateZ(34deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-34deg) rotateY(227deg) translateX(300px) rotateZ(34deg);
  }
}
.c:nth-child(229) {
  animation: orbit229 14s infinite;
  animation-delay: 2.29s;
  background-color: #ff8200;
}

@keyframes orbit229 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-14deg) rotateY(53deg) translateX(100px) rotateZ(14deg);
  }
  80% {
    transform: rotateZ(-14deg) rotateY(53deg) translateX(100px) rotateZ(14deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-14deg) rotateY(53deg) translateX(300px) rotateZ(14deg);
  }
}
.c:nth-child(230) {
  animation: orbit230 14s infinite;
  animation-delay: 2.3s;
  background-color: #ff8200;
}

@keyframes orbit230 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-161deg) rotateY(127deg) translateX(100px) rotateZ(161deg);
  }
  80% {
    transform: rotateZ(-161deg) rotateY(127deg) translateX(100px) rotateZ(161deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-161deg) rotateY(127deg) translateX(300px) rotateZ(161deg);
  }
}
.c:nth-child(231) {
  animation: orbit231 14s infinite;
  animation-delay: 2.31s;
  background-color: #ff8300;
}

@keyframes orbit231 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-132deg) rotateY(71deg) translateX(100px) rotateZ(132deg);
  }
  80% {
    transform: rotateZ(-132deg) rotateY(71deg) translateX(100px) rotateZ(132deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-132deg) rotateY(71deg) translateX(300px) rotateZ(132deg);
  }
}
.c:nth-child(232) {
  animation: orbit232 14s infinite;
  animation-delay: 2.32s;
  background-color: #ff8300;
}

@keyframes orbit232 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-73deg) rotateY(360deg) translateX(100px) rotateZ(73deg);
  }
  80% {
    transform: rotateZ(-73deg) rotateY(360deg) translateX(100px) rotateZ(73deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-73deg) rotateY(360deg) translateX(300px) rotateZ(73deg);
  }
}
.c:nth-child(233) {
  animation: orbit233 14s infinite;
  animation-delay: 2.33s;
  background-color: #ff8400;
}

@keyframes orbit233 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-13deg) rotateY(167deg) translateX(100px) rotateZ(13deg);
  }
  80% {
    transform: rotateZ(-13deg) rotateY(167deg) translateX(100px) rotateZ(13deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-13deg) rotateY(167deg) translateX(300px) rotateZ(13deg);
  }
}
.c:nth-child(234) {
  animation: orbit234 14s infinite;
  animation-delay: 2.34s;
  background-color: #ff8500;
}

@keyframes orbit234 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-325deg) rotateY(27deg) translateX(100px) rotateZ(325deg);
  }
  80% {
    transform: rotateZ(-325deg) rotateY(27deg) translateX(100px) rotateZ(325deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-325deg) rotateY(27deg) translateX(300px) rotateZ(325deg);
  }
}
.c:nth-child(235) {
  animation: orbit235 14s infinite;
  animation-delay: 2.35s;
  background-color: #ff8500;
}

@keyframes orbit235 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-247deg) rotateY(216deg) translateX(100px) rotateZ(247deg);
  }
  80% {
    transform: rotateZ(-247deg) rotateY(216deg) translateX(100px) rotateZ(247deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-247deg) rotateY(216deg) translateX(300px) rotateZ(247deg);
  }
}
.c:nth-child(236) {
  animation: orbit236 14s infinite;
  animation-delay: 2.36s;
  background-color: #ff8600;
}

@keyframes orbit236 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-114deg) rotateY(280deg) translateX(100px) rotateZ(114deg);
  }
  80% {
    transform: rotateZ(-114deg) rotateY(280deg) translateX(100px) rotateZ(114deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-114deg) rotateY(280deg) translateX(300px) rotateZ(114deg);
  }
}
.c:nth-child(237) {
  animation: orbit237 14s infinite;
  animation-delay: 2.37s;
  background-color: #ff8600;
}

@keyframes orbit237 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-159deg) rotateY(324deg) translateX(100px) rotateZ(159deg);
  }
  80% {
    transform: rotateZ(-159deg) rotateY(324deg) translateX(100px) rotateZ(159deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-159deg) rotateY(324deg) translateX(300px) rotateZ(159deg);
  }
}
.c:nth-child(238) {
  animation: orbit238 14s infinite;
  animation-delay: 2.38s;
  background-color: #ff8700;
}

@keyframes orbit238 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-42deg) rotateY(123deg) translateX(100px) rotateZ(42deg);
  }
  80% {
    transform: rotateZ(-42deg) rotateY(123deg) translateX(100px) rotateZ(42deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-42deg) rotateY(123deg) translateX(300px) rotateZ(42deg);
  }
}
.c:nth-child(239) {
  animation: orbit239 14s infinite;
  animation-delay: 2.39s;
  background-color: #ff8700;
}

@keyframes orbit239 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-143deg) rotateY(53deg) translateX(100px) rotateZ(143deg);
  }
  80% {
    transform: rotateZ(-143deg) rotateY(53deg) translateX(100px) rotateZ(143deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-143deg) rotateY(53deg) translateX(300px) rotateZ(143deg);
  }
}
.c:nth-child(240) {
  animation: orbit240 14s infinite;
  animation-delay: 2.4s;
  background-color: #ff8800;
}

@keyframes orbit240 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-286deg) rotateY(82deg) translateX(100px) rotateZ(286deg);
  }
  80% {
    transform: rotateZ(-286deg) rotateY(82deg) translateX(100px) rotateZ(286deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-286deg) rotateY(82deg) translateX(300px) rotateZ(286deg);
  }
}
.c:nth-child(241) {
  animation: orbit241 14s infinite;
  animation-delay: 2.41s;
  background-color: #ff8900;
}

@keyframes orbit241 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-257deg) rotateY(265deg) translateX(100px) rotateZ(257deg);
  }
  80% {
    transform: rotateZ(-257deg) rotateY(265deg) translateX(100px) rotateZ(257deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-257deg) rotateY(265deg) translateX(300px) rotateZ(257deg);
  }
}
.c:nth-child(242) {
  animation: orbit242 14s infinite;
  animation-delay: 2.42s;
  background-color: #ff8900;
}

@keyframes orbit242 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-213deg) rotateY(237deg) translateX(100px) rotateZ(213deg);
  }
  80% {
    transform: rotateZ(-213deg) rotateY(237deg) translateX(100px) rotateZ(213deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-213deg) rotateY(237deg) translateX(300px) rotateZ(213deg);
  }
}
.c:nth-child(243) {
  animation: orbit243 14s infinite;
  animation-delay: 2.43s;
  background-color: #ff8a00;
}

@keyframes orbit243 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-26deg) rotateY(48deg) translateX(100px) rotateZ(26deg);
  }
  80% {
    transform: rotateZ(-26deg) rotateY(48deg) translateX(100px) rotateZ(26deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-26deg) rotateY(48deg) translateX(300px) rotateZ(26deg);
  }
}
.c:nth-child(244) {
  animation: orbit244 14s infinite;
  animation-delay: 2.44s;
  background-color: #ff8a00;
}

@keyframes orbit244 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-327deg) rotateY(115deg) translateX(100px) rotateZ(327deg);
  }
  80% {
    transform: rotateZ(-327deg) rotateY(115deg) translateX(100px) rotateZ(327deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-327deg) rotateY(115deg) translateX(300px) rotateZ(327deg);
  }
}
.c:nth-child(245) {
  animation: orbit245 14s infinite;
  animation-delay: 2.45s;
  background-color: #ff8b00;
}

@keyframes orbit245 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-353deg) rotateY(117deg) translateX(100px) rotateZ(353deg);
  }
  80% {
    transform: rotateZ(-353deg) rotateY(117deg) translateX(100px) rotateZ(353deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-353deg) rotateY(117deg) translateX(300px) rotateZ(353deg);
  }
}
.c:nth-child(246) {
  animation: orbit246 14s infinite;
  animation-delay: 2.46s;
  background-color: #ff8b00;
}

@keyframes orbit246 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-87deg) rotateY(15deg) translateX(100px) rotateZ(87deg);
  }
  80% {
    transform: rotateZ(-87deg) rotateY(15deg) translateX(100px) rotateZ(87deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-87deg) rotateY(15deg) translateX(300px) rotateZ(87deg);
  }
}
.c:nth-child(247) {
  animation: orbit247 14s infinite;
  animation-delay: 2.47s;
  background-color: darkorange;
}

@keyframes orbit247 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-307deg) rotateY(357deg) translateX(100px) rotateZ(307deg);
  }
  80% {
    transform: rotateZ(-307deg) rotateY(357deg) translateX(100px) rotateZ(307deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-307deg) rotateY(357deg) translateX(300px) rotateZ(307deg);
  }
}
.c:nth-child(248) {
  animation: orbit248 14s infinite;
  animation-delay: 2.48s;
  background-color: #ff8d00;
}

@keyframes orbit248 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-207deg) rotateY(223deg) translateX(100px) rotateZ(207deg);
  }
  80% {
    transform: rotateZ(-207deg) rotateY(223deg) translateX(100px) rotateZ(207deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-207deg) rotateY(223deg) translateX(300px) rotateZ(207deg);
  }
}
.c:nth-child(249) {
  animation: orbit249 14s infinite;
  animation-delay: 2.49s;
  background-color: #ff8d00;
}

@keyframes orbit249 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-87deg) rotateY(342deg) translateX(100px) rotateZ(87deg);
  }
  80% {
    transform: rotateZ(-87deg) rotateY(342deg) translateX(100px) rotateZ(87deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-87deg) rotateY(342deg) translateX(300px) rotateZ(87deg);
  }
}
.c:nth-child(250) {
  animation: orbit250 14s infinite;
  animation-delay: 2.5s;
  background-color: #ff8e00;
}

@keyframes orbit250 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-172deg) rotateY(227deg) translateX(100px) rotateZ(172deg);
  }
  80% {
    transform: rotateZ(-172deg) rotateY(227deg) translateX(100px) rotateZ(172deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-172deg) rotateY(227deg) translateX(300px) rotateZ(172deg);
  }
}
.c:nth-child(251) {
  animation: orbit251 14s infinite;
  animation-delay: 2.51s;
  background-color: #ff8e00;
}

@keyframes orbit251 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-213deg) rotateY(185deg) translateX(100px) rotateZ(213deg);
  }
  80% {
    transform: rotateZ(-213deg) rotateY(185deg) translateX(100px) rotateZ(213deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-213deg) rotateY(185deg) translateX(300px) rotateZ(213deg);
  }
}
.c:nth-child(252) {
  animation: orbit252 14s infinite;
  animation-delay: 2.52s;
  background-color: #ff8f00;
}

@keyframes orbit252 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-33deg) rotateY(283deg) translateX(100px) rotateZ(33deg);
  }
  80% {
    transform: rotateZ(-33deg) rotateY(283deg) translateX(100px) rotateZ(33deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-33deg) rotateY(283deg) translateX(300px) rotateZ(33deg);
  }
}
.c:nth-child(253) {
  animation: orbit253 14s infinite;
  animation-delay: 2.53s;
  background-color: #ff8f00;
}

@keyframes orbit253 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-48deg) rotateY(75deg) translateX(100px) rotateZ(48deg);
  }
  80% {
    transform: rotateZ(-48deg) rotateY(75deg) translateX(100px) rotateZ(48deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-48deg) rotateY(75deg) translateX(300px) rotateZ(48deg);
  }
}
.c:nth-child(254) {
  animation: orbit254 14s infinite;
  animation-delay: 2.54s;
  background-color: #ff9000;
}

@keyframes orbit254 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-37deg) rotateY(195deg) translateX(100px) rotateZ(37deg);
  }
  80% {
    transform: rotateZ(-37deg) rotateY(195deg) translateX(100px) rotateZ(37deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-37deg) rotateY(195deg) translateX(300px) rotateZ(37deg);
  }
}
.c:nth-child(255) {
  animation: orbit255 14s infinite;
  animation-delay: 2.55s;
  background-color: #ff9100;
}

@keyframes orbit255 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-64deg) rotateY(330deg) translateX(100px) rotateZ(64deg);
  }
  80% {
    transform: rotateZ(-64deg) rotateY(330deg) translateX(100px) rotateZ(64deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-64deg) rotateY(330deg) translateX(300px) rotateZ(64deg);
  }
}
.c:nth-child(256) {
  animation: orbit256 14s infinite;
  animation-delay: 2.56s;
  background-color: #ff9100;
}

@keyframes orbit256 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-182deg) rotateY(255deg) translateX(100px) rotateZ(182deg);
  }
  80% {
    transform: rotateZ(-182deg) rotateY(255deg) translateX(100px) rotateZ(182deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-182deg) rotateY(255deg) translateX(300px) rotateZ(182deg);
  }
}
.c:nth-child(257) {
  animation: orbit257 14s infinite;
  animation-delay: 2.57s;
  background-color: #ff9200;
}

@keyframes orbit257 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-180deg) rotateY(355deg) translateX(100px) rotateZ(180deg);
  }
  80% {
    transform: rotateZ(-180deg) rotateY(355deg) translateX(100px) rotateZ(180deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-180deg) rotateY(355deg) translateX(300px) rotateZ(180deg);
  }
}
.c:nth-child(258) {
  animation: orbit258 14s infinite;
  animation-delay: 2.58s;
  background-color: #ff9200;
}

@keyframes orbit258 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-60deg) rotateY(18deg) translateX(100px) rotateZ(60deg);
  }
  80% {
    transform: rotateZ(-60deg) rotateY(18deg) translateX(100px) rotateZ(60deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-60deg) rotateY(18deg) translateX(300px) rotateZ(60deg);
  }
}
.c:nth-child(259) {
  animation: orbit259 14s infinite;
  animation-delay: 2.59s;
  background-color: #ff9300;
}

@keyframes orbit259 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-29deg) rotateY(140deg) translateX(100px) rotateZ(29deg);
  }
  80% {
    transform: rotateZ(-29deg) rotateY(140deg) translateX(100px) rotateZ(29deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-29deg) rotateY(140deg) translateX(300px) rotateZ(29deg);
  }
}
.c:nth-child(260) {
  animation: orbit260 14s infinite;
  animation-delay: 2.6s;
  background-color: #ff9300;
}

@keyframes orbit260 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-357deg) rotateY(228deg) translateX(100px) rotateZ(357deg);
  }
  80% {
    transform: rotateZ(-357deg) rotateY(228deg) translateX(100px) rotateZ(357deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-357deg) rotateY(228deg) translateX(300px) rotateZ(357deg);
  }
}
.c:nth-child(261) {
  animation: orbit261 14s infinite;
  animation-delay: 2.61s;
  background-color: #ff9400;
}

@keyframes orbit261 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-312deg) rotateY(268deg) translateX(100px) rotateZ(312deg);
  }
  80% {
    transform: rotateZ(-312deg) rotateY(268deg) translateX(100px) rotateZ(312deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-312deg) rotateY(268deg) translateX(300px) rotateZ(312deg);
  }
}
.c:nth-child(262) {
  animation: orbit262 14s infinite;
  animation-delay: 2.62s;
  background-color: #ff9400;
}

@keyframes orbit262 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-290deg) rotateY(359deg) translateX(100px) rotateZ(290deg);
  }
  80% {
    transform: rotateZ(-290deg) rotateY(359deg) translateX(100px) rotateZ(290deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-290deg) rotateY(359deg) translateX(300px) rotateZ(290deg);
  }
}
.c:nth-child(263) {
  animation: orbit263 14s infinite;
  animation-delay: 2.63s;
  background-color: #ff9500;
}

@keyframes orbit263 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-109deg) rotateY(226deg) translateX(100px) rotateZ(109deg);
  }
  80% {
    transform: rotateZ(-109deg) rotateY(226deg) translateX(100px) rotateZ(109deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-109deg) rotateY(226deg) translateX(300px) rotateZ(109deg);
  }
}
.c:nth-child(264) {
  animation: orbit264 14s infinite;
  animation-delay: 2.64s;
  background-color: #ff9600;
}

@keyframes orbit264 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-279deg) rotateY(169deg) translateX(100px) rotateZ(279deg);
  }
  80% {
    transform: rotateZ(-279deg) rotateY(169deg) translateX(100px) rotateZ(279deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-279deg) rotateY(169deg) translateX(300px) rotateZ(279deg);
  }
}
.c:nth-child(265) {
  animation: orbit265 14s infinite;
  animation-delay: 2.65s;
  background-color: #ff9600;
}

@keyframes orbit265 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-175deg) rotateY(223deg) translateX(100px) rotateZ(175deg);
  }
  80% {
    transform: rotateZ(-175deg) rotateY(223deg) translateX(100px) rotateZ(175deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-175deg) rotateY(223deg) translateX(300px) rotateZ(175deg);
  }
}
.c:nth-child(266) {
  animation: orbit266 14s infinite;
  animation-delay: 2.66s;
  background-color: #ff9700;
}

@keyframes orbit266 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-27deg) rotateY(257deg) translateX(100px) rotateZ(27deg);
  }
  80% {
    transform: rotateZ(-27deg) rotateY(257deg) translateX(100px) rotateZ(27deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-27deg) rotateY(257deg) translateX(300px) rotateZ(27deg);
  }
}
.c:nth-child(267) {
  animation: orbit267 14s infinite;
  animation-delay: 2.67s;
  background-color: #ff9700;
}

@keyframes orbit267 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-311deg) rotateY(165deg) translateX(100px) rotateZ(311deg);
  }
  80% {
    transform: rotateZ(-311deg) rotateY(165deg) translateX(100px) rotateZ(311deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-311deg) rotateY(165deg) translateX(300px) rotateZ(311deg);
  }
}
.c:nth-child(268) {
  animation: orbit268 14s infinite;
  animation-delay: 2.68s;
  background-color: #ff9800;
}

@keyframes orbit268 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-56deg) rotateY(2deg) translateX(100px) rotateZ(56deg);
  }
  80% {
    transform: rotateZ(-56deg) rotateY(2deg) translateX(100px) rotateZ(56deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-56deg) rotateY(2deg) translateX(300px) rotateZ(56deg);
  }
}
.c:nth-child(269) {
  animation: orbit269 14s infinite;
  animation-delay: 2.69s;
  background-color: #ff9800;
}

@keyframes orbit269 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-159deg) rotateY(15deg) translateX(100px) rotateZ(159deg);
  }
  80% {
    transform: rotateZ(-159deg) rotateY(15deg) translateX(100px) rotateZ(159deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-159deg) rotateY(15deg) translateX(300px) rotateZ(159deg);
  }
}
.c:nth-child(270) {
  animation: orbit270 14s infinite;
  animation-delay: 2.7s;
  background-color: #ff9900;
}

@keyframes orbit270 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-106deg) rotateY(68deg) translateX(100px) rotateZ(106deg);
  }
  80% {
    transform: rotateZ(-106deg) rotateY(68deg) translateX(100px) rotateZ(106deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-106deg) rotateY(68deg) translateX(300px) rotateZ(106deg);
  }
}
.c:nth-child(271) {
  animation: orbit271 14s infinite;
  animation-delay: 2.71s;
  background-color: #ff9a00;
}

@keyframes orbit271 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-127deg) rotateY(257deg) translateX(100px) rotateZ(127deg);
  }
  80% {
    transform: rotateZ(-127deg) rotateY(257deg) translateX(100px) rotateZ(127deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-127deg) rotateY(257deg) translateX(300px) rotateZ(127deg);
  }
}
.c:nth-child(272) {
  animation: orbit272 14s infinite;
  animation-delay: 2.72s;
  background-color: #ff9a00;
}

@keyframes orbit272 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-22deg) rotateY(79deg) translateX(100px) rotateZ(22deg);
  }
  80% {
    transform: rotateZ(-22deg) rotateY(79deg) translateX(100px) rotateZ(22deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-22deg) rotateY(79deg) translateX(300px) rotateZ(22deg);
  }
}
.c:nth-child(273) {
  animation: orbit273 14s infinite;
  animation-delay: 2.73s;
  background-color: #ff9b00;
}

@keyframes orbit273 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-254deg) rotateY(46deg) translateX(100px) rotateZ(254deg);
  }
  80% {
    transform: rotateZ(-254deg) rotateY(46deg) translateX(100px) rotateZ(254deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-254deg) rotateY(46deg) translateX(300px) rotateZ(254deg);
  }
}
.c:nth-child(274) {
  animation: orbit274 14s infinite;
  animation-delay: 2.74s;
  background-color: #ff9b00;
}

@keyframes orbit274 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-35deg) rotateY(319deg) translateX(100px) rotateZ(35deg);
  }
  80% {
    transform: rotateZ(-35deg) rotateY(319deg) translateX(100px) rotateZ(35deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-35deg) rotateY(319deg) translateX(300px) rotateZ(35deg);
  }
}
.c:nth-child(275) {
  animation: orbit275 14s infinite;
  animation-delay: 2.75s;
  background-color: #ff9c00;
}

@keyframes orbit275 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-50deg) rotateY(160deg) translateX(100px) rotateZ(50deg);
  }
  80% {
    transform: rotateZ(-50deg) rotateY(160deg) translateX(100px) rotateZ(50deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-50deg) rotateY(160deg) translateX(300px) rotateZ(50deg);
  }
}
.c:nth-child(276) {
  animation: orbit276 14s infinite;
  animation-delay: 2.76s;
  background-color: #ff9c00;
}

@keyframes orbit276 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-98deg) rotateY(118deg) translateX(100px) rotateZ(98deg);
  }
  80% {
    transform: rotateZ(-98deg) rotateY(118deg) translateX(100px) rotateZ(98deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-98deg) rotateY(118deg) translateX(300px) rotateZ(98deg);
  }
}
.c:nth-child(277) {
  animation: orbit277 14s infinite;
  animation-delay: 2.77s;
  background-color: #ff9d00;
}

@keyframes orbit277 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-76deg) rotateY(160deg) translateX(100px) rotateZ(76deg);
  }
  80% {
    transform: rotateZ(-76deg) rotateY(160deg) translateX(100px) rotateZ(76deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-76deg) rotateY(160deg) translateX(300px) rotateZ(76deg);
  }
}
.c:nth-child(278) {
  animation: orbit278 14s infinite;
  animation-delay: 2.78s;
  background-color: #ff9e00;
}

@keyframes orbit278 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-346deg) rotateY(56deg) translateX(100px) rotateZ(346deg);
  }
  80% {
    transform: rotateZ(-346deg) rotateY(56deg) translateX(100px) rotateZ(346deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-346deg) rotateY(56deg) translateX(300px) rotateZ(346deg);
  }
}
.c:nth-child(279) {
  animation: orbit279 14s infinite;
  animation-delay: 2.79s;
  background-color: #ff9e00;
}

@keyframes orbit279 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-71deg) rotateY(10deg) translateX(100px) rotateZ(71deg);
  }
  80% {
    transform: rotateZ(-71deg) rotateY(10deg) translateX(100px) rotateZ(71deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-71deg) rotateY(10deg) translateX(300px) rotateZ(71deg);
  }
}
.c:nth-child(280) {
  animation: orbit280 14s infinite;
  animation-delay: 2.8s;
  background-color: #ff9f00;
}

@keyframes orbit280 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-19deg) rotateY(222deg) translateX(100px) rotateZ(19deg);
  }
  80% {
    transform: rotateZ(-19deg) rotateY(222deg) translateX(100px) rotateZ(19deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-19deg) rotateY(222deg) translateX(300px) rotateZ(19deg);
  }
}
.c:nth-child(281) {
  animation: orbit281 14s infinite;
  animation-delay: 2.81s;
  background-color: #ff9f00;
}

@keyframes orbit281 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-264deg) rotateY(330deg) translateX(100px) rotateZ(264deg);
  }
  80% {
    transform: rotateZ(-264deg) rotateY(330deg) translateX(100px) rotateZ(264deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-264deg) rotateY(330deg) translateX(300px) rotateZ(264deg);
  }
}
.c:nth-child(282) {
  animation: orbit282 14s infinite;
  animation-delay: 2.82s;
  background-color: #ffa000;
}

@keyframes orbit282 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-46deg) rotateY(183deg) translateX(100px) rotateZ(46deg);
  }
  80% {
    transform: rotateZ(-46deg) rotateY(183deg) translateX(100px) rotateZ(46deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-46deg) rotateY(183deg) translateX(300px) rotateZ(46deg);
  }
}
.c:nth-child(283) {
  animation: orbit283 14s infinite;
  animation-delay: 2.83s;
  background-color: #ffa000;
}

@keyframes orbit283 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-194deg) rotateY(68deg) translateX(100px) rotateZ(194deg);
  }
  80% {
    transform: rotateZ(-194deg) rotateY(68deg) translateX(100px) rotateZ(194deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-194deg) rotateY(68deg) translateX(300px) rotateZ(194deg);
  }
}
.c:nth-child(284) {
  animation: orbit284 14s infinite;
  animation-delay: 2.84s;
  background-color: #ffa100;
}

@keyframes orbit284 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-236deg) rotateY(341deg) translateX(100px) rotateZ(236deg);
  }
  80% {
    transform: rotateZ(-236deg) rotateY(341deg) translateX(100px) rotateZ(236deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-236deg) rotateY(341deg) translateX(300px) rotateZ(236deg);
  }
}
.c:nth-child(285) {
  animation: orbit285 14s infinite;
  animation-delay: 2.85s;
  background-color: #ffa200;
}

@keyframes orbit285 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-347deg) rotateY(86deg) translateX(100px) rotateZ(347deg);
  }
  80% {
    transform: rotateZ(-347deg) rotateY(86deg) translateX(100px) rotateZ(347deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-347deg) rotateY(86deg) translateX(300px) rotateZ(347deg);
  }
}
.c:nth-child(286) {
  animation: orbit286 14s infinite;
  animation-delay: 2.86s;
  background-color: #ffa200;
}

@keyframes orbit286 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-270deg) rotateY(351deg) translateX(100px) rotateZ(270deg);
  }
  80% {
    transform: rotateZ(-270deg) rotateY(351deg) translateX(100px) rotateZ(270deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-270deg) rotateY(351deg) translateX(300px) rotateZ(270deg);
  }
}
.c:nth-child(287) {
  animation: orbit287 14s infinite;
  animation-delay: 2.87s;
  background-color: #ffa300;
}

@keyframes orbit287 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-262deg) rotateY(291deg) translateX(100px) rotateZ(262deg);
  }
  80% {
    transform: rotateZ(-262deg) rotateY(291deg) translateX(100px) rotateZ(262deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-262deg) rotateY(291deg) translateX(300px) rotateZ(262deg);
  }
}
.c:nth-child(288) {
  animation: orbit288 14s infinite;
  animation-delay: 2.88s;
  background-color: #ffa300;
}

@keyframes orbit288 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-199deg) rotateY(298deg) translateX(100px) rotateZ(199deg);
  }
  80% {
    transform: rotateZ(-199deg) rotateY(298deg) translateX(100px) rotateZ(199deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-199deg) rotateY(298deg) translateX(300px) rotateZ(199deg);
  }
}
.c:nth-child(289) {
  animation: orbit289 14s infinite;
  animation-delay: 2.89s;
  background-color: #ffa400;
}

@keyframes orbit289 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-110deg) rotateY(326deg) translateX(100px) rotateZ(110deg);
  }
  80% {
    transform: rotateZ(-110deg) rotateY(326deg) translateX(100px) rotateZ(110deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-110deg) rotateY(326deg) translateX(300px) rotateZ(110deg);
  }
}
.c:nth-child(290) {
  animation: orbit290 14s infinite;
  animation-delay: 2.9s;
  background-color: #ffa400;
}

@keyframes orbit290 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-9deg) rotateY(69deg) translateX(100px) rotateZ(9deg);
  }
  80% {
    transform: rotateZ(-9deg) rotateY(69deg) translateX(100px) rotateZ(9deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-9deg) rotateY(69deg) translateX(300px) rotateZ(9deg);
  }
}
.c:nth-child(291) {
  animation: orbit291 14s infinite;
  animation-delay: 2.91s;
  background-color: orange;
}

@keyframes orbit291 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-202deg) rotateY(325deg) translateX(100px) rotateZ(202deg);
  }
  80% {
    transform: rotateZ(-202deg) rotateY(325deg) translateX(100px) rotateZ(202deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-202deg) rotateY(325deg) translateX(300px) rotateZ(202deg);
  }
}
.c:nth-child(292) {
  animation: orbit292 14s infinite;
  animation-delay: 2.92s;
  background-color: orange;
}

@keyframes orbit292 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-321deg) rotateY(6deg) translateX(100px) rotateZ(321deg);
  }
  80% {
    transform: rotateZ(-321deg) rotateY(6deg) translateX(100px) rotateZ(321deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-321deg) rotateY(6deg) translateX(300px) rotateZ(321deg);
  }
}
.c:nth-child(293) {
  animation: orbit293 14s infinite;
  animation-delay: 2.93s;
  background-color: #ffa600;
}

@keyframes orbit293 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-156deg) rotateY(163deg) translateX(100px) rotateZ(156deg);
  }
  80% {
    transform: rotateZ(-156deg) rotateY(163deg) translateX(100px) rotateZ(156deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-156deg) rotateY(163deg) translateX(300px) rotateZ(156deg);
  }
}
.c:nth-child(294) {
  animation: orbit294 14s infinite;
  animation-delay: 2.94s;
  background-color: #ffa700;
}

@keyframes orbit294 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-315deg) rotateY(171deg) translateX(100px) rotateZ(315deg);
  }
  80% {
    transform: rotateZ(-315deg) rotateY(171deg) translateX(100px) rotateZ(315deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-315deg) rotateY(171deg) translateX(300px) rotateZ(315deg);
  }
}
.c:nth-child(295) {
  animation: orbit295 14s infinite;
  animation-delay: 2.95s;
  background-color: #ffa700;
}

@keyframes orbit295 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-87deg) rotateY(330deg) translateX(100px) rotateZ(87deg);
  }
  80% {
    transform: rotateZ(-87deg) rotateY(330deg) translateX(100px) rotateZ(87deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-87deg) rotateY(330deg) translateX(300px) rotateZ(87deg);
  }
}
.c:nth-child(296) {
  animation: orbit296 14s infinite;
  animation-delay: 2.96s;
  background-color: #ffa800;
}

@keyframes orbit296 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-300deg) rotateY(261deg) translateX(100px) rotateZ(300deg);
  }
  80% {
    transform: rotateZ(-300deg) rotateY(261deg) translateX(100px) rotateZ(300deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-300deg) rotateY(261deg) translateX(300px) rotateZ(300deg);
  }
}
.c:nth-child(297) {
  animation: orbit297 14s infinite;
  animation-delay: 2.97s;
  background-color: #ffa800;
}

@keyframes orbit297 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-77deg) rotateY(317deg) translateX(100px) rotateZ(77deg);
  }
  80% {
    transform: rotateZ(-77deg) rotateY(317deg) translateX(100px) rotateZ(77deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-77deg) rotateY(317deg) translateX(300px) rotateZ(77deg);
  }
}
.c:nth-child(298) {
  animation: orbit298 14s infinite;
  animation-delay: 2.98s;
  background-color: #ffa900;
}

@keyframes orbit298 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-191deg) rotateY(125deg) translateX(100px) rotateZ(191deg);
  }
  80% {
    transform: rotateZ(-191deg) rotateY(125deg) translateX(100px) rotateZ(191deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-191deg) rotateY(125deg) translateX(300px) rotateZ(191deg);
  }
}
.c:nth-child(299) {
  animation: orbit299 14s infinite;
  animation-delay: 2.99s;
  background-color: #ffa900;
}

@keyframes orbit299 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-153deg) rotateY(149deg) translateX(100px) rotateZ(153deg);
  }
  80% {
    transform: rotateZ(-153deg) rotateY(149deg) translateX(100px) rotateZ(153deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-153deg) rotateY(149deg) translateX(300px) rotateZ(153deg);
  }
}
.c:nth-child(300) {
  animation: orbit300 14s infinite;
  animation-delay: 3s;
  background-color: #ffaa00;
}

@keyframes orbit300 {
  20% {
    opacity: 1;
  }
  30% {
    transform: rotateZ(-360deg) rotateY(141deg) translateX(100px) rotateZ(360deg);
  }
  80% {
    transform: rotateZ(-360deg) rotateY(141deg) translateX(100px) rotateZ(360deg);
    opacity: 1;
  }
  100% {
    transform: rotateZ(-360deg) rotateY(141deg) translateX(300px) rotateZ(360deg);
  }
}

</style>

<!-- @if(Session::has('register'))
  <script>
    swal("Good job!", "Thanks for Joining us!", "success");
  </script>
@endif -->
<body>
@include('sweet::alert')

<div class="box">
<div class='wrap'>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
  <div class='c'></div>
</div>
    <div class="containter ">
    <a href="/working" class="text-left"><i class="fa fa-home text-white "> </i></a><h1 style="text-align: center; margin-bottom: 10px; color: white; font-family: geneva; font-size: 50px;">Welcome</h1>
        <div class="text-center mb-4">
            <!-- <i class="fa fa-heartbeat fa-4x text-danger" aria-hidden="true"></i> -->
            <img class="logo" src="https://i.pinimg.com/originals/16/aa/df/16aadf06716be2bb9c958b31ee1173a1.jpg" alt="" srcset="">
            <h6 class="text-white">HEATHCHAIN</h5>
        </div>
        <div class="form-group">
            <form action="/Auth" method="POST">
            @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="">Username</label>
                        <input id="B" type="text" name="username" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                        <div class="col-12">
                            <label for="">Password</label>
                            <input id="B"type="password" name="password" id="" required class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for=""></label>
                            <input id="A" type="submit" value="LOGIN" class=" form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-5">
                            <p class="text-light">Don’t have an account?<a href="/Signup" style="text-decoration:none" class="text-primary LB"> Get Register here</a></p>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>




</body>
</html>