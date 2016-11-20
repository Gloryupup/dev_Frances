<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>登陆验证</title>
	<link rel="stylesheet" href="/Mycar/Public/Style/login.css">
</head>
<body>
	<div class="section-center">
      <div class="container">
        <div class="cover heading">汽车数据平台</div>
        <div class="cover description">看向汽车数据的窗口！</div>
        <div class="cover action">
          <form method="post" action="<?php echo U('User/logup_result');?>" class="container">
          	<ul>
          		<li>
          			<input type="text" name="username" placeholder="用户名">
          		</li>
          		<li>
          			<input type="password" name="password" placeholder="密码">
          		</li>
          		<li>
          			<button type="submit" class="login-button">提交注册</button>
          		</li>
        </div>
      </div>
    </div>
    <script src="/Mycar/Public/js/login/three.min.js"></script>
    <script src="/Mycar/Public/js/login/Projector.js"></script>
    <script src="/Mycar/Public/js/login/CanvasRender.js"></script>
    <script>var SEPARATION = 200,
      AMOUNTX = 30,
      AMOUNTY = 30;

      var container, stats;
      var camera, scene, renderer;

      var particles, particle, count = 0;

      var mouseX = 0,
      mouseY = -500;

      var windowHalfX = window.innerWidth / 2;
      var windowHalfY = window.innerHeight / 2;
      window.onload = function() {
        init();
        animate();
        //- baidu Analytics
        if (!/^http:\/\/localhost/.test(location.href)) {
          var _hmt = _hmt || [];
          var hm = document.createElement("script");
          hm.src = "//hm.baidu.com/hm.js?930e83393fcca01f1abff14df21cec12";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        }
      };

      function init() {

        container = document.createElement('div');
        document.body.appendChild(container);

        camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 10000);
        camera.position.z = 1000;

        scene = new THREE.Scene();

        particles = new Array();

        var PI2 = Math.PI * 2;
        var material = new THREE.SpriteCanvasMaterial({

          color: 0x558646,
          program: function(context) {

            context.beginPath();
            context.arc(0, 0, 0.5, 0, PI2, true);
            context.fill();

          }

        });

        var i = 0;

        for (var ix = 0; ix < AMOUNTX; ix++) {

          for (var iy = 0; iy < AMOUNTY; iy++) {
            particle = particles[i++] = new THREE.Sprite(material);
            particle.position.x = ix * SEPARATION - ((AMOUNTX * SEPARATION) / 2);
            particle.position.z = iy * SEPARATION - ((AMOUNTY * SEPARATION) / 2);

            scene.add(particle);
            //- setTimeout(lazy(particle),300);
          }

        }

        renderer = new THREE.CanvasRenderer();
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        //- stats = new Stats();
        //- container.appendChild( stats.dom );
        document.addEventListener('mousemove', onDocumentMouseMove, false);
        document.addEventListener('touchstart', onDocumentTouchStart, false);
        document.addEventListener('touchmove', onDocumentTouchMove, false);

        //
        window.addEventListener('resize', onWindowResize, false);

      }

      //- function lazy(particle){
      //-     return function(){
      //-         render();
      //-     }
      //- }
      function onWindowResize() {

        windowHalfX = window.innerWidth / 2;
        windowHalfY = window.innerHeight / 2;

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();

        renderer.setSize(window.innerWidth, window.innerHeight);

      }

      //
      function onDocumentMouseMove(event) {

        mouseX = event.clientX - windowHalfX;
        //- mouseY = event.clientY - windowHalfY;
      }

      function onDocumentTouchStart(event) {

        if (event.touches.length === 1) {

          event.preventDefault();

          mouseX = event.touches[0].pageX - windowHalfX;
          //- mouseY = event.touches[ 0 ].pageY - windowHalfY;
        }

      }

      function onDocumentTouchMove(event) {

        if (event.touches.length === 1) {

          event.preventDefault();

          mouseX = event.touches[0].pageX - windowHalfX;
          //- mouseY = event.touches[ 0 ].pageY - windowHalfY;
        }

      }

      //
      function animate() {

        requestAnimationFrame(animate);

        render();
        //- stats.update();
      }

      function render() {

        camera.position.x += (mouseX - camera.position.x) * .05;
        camera.position.y += ( - mouseY - camera.position.y) * .05;
        camera.lookAt(scene.position);

        var i = 0;

        for (var ix = 0; ix < AMOUNTX; ix++) {

          for (var iy = 0; iy < AMOUNTY; iy++) {

            particle = particles[i++];
            particle.position.y = (Math.sin((ix + count) * 0.3) * 50) + (Math.sin((iy + count) * 0.5) * 50);
            particle.scale.x = particle.scale.y = (Math.sin((ix + count) * 0.3) + 1) * 4 + (Math.sin((iy + count) * 0.5) + 1) * 4;

          }

        }

        renderer.render(scene, camera);

        count += 0.1;

      }</script>
  </body>
</html>