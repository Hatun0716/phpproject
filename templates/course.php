<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Project</title>
    <style>.btnquiz{ }</style>
</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="layout.php">Home</a></li>
                    <li><a href="login.php">SignOut</a></li>
                </ul>
            </div>
            <h3 class="heading">HTML</h3>
            <div class="video-box">
                <div class="main-video">
                <div class="video">
                    <video  controls src="../vidoes/Introduction and What I Need To Learn.mp4" ></video>
                    <h3 class="title" >01.Introduction and What I Need To Learn</h3><br>
                </div>
            </div>
            </form>            <div class="video-list">
                <div class="vid active">
                    <video src="../vidoes/Introduction and What I Need To Learn.mp4"></video>
                    <h3 class="title">01.Introduction and What I Need To Learn</h3>
                </div>
                <div class="vid">
                    <video src="../vidoes/Elements And Browser.mp4"></video>
                    <h3 class="title">02.Elements And Browser</h3>
                </div>
                <div class="vid">
                    <video src="../vidoes/First Project And First Page.mp4"></video>
                    <h3 class="title">03. First Project And First Page</h3>
                </div>
                <div class="vid">
                    <video src="../vidoes/Head And Nested Elements.mp4"></video>
                    <h3 class="title">04.Head And Nested Elements</h3>
                </div>
            </div>
        </div>
        <script>
            let listvideo=document.querySelectorAll('.video-list .vid');
            let mainvideo=document.querySelector('.main-video video');
            let title=document.querySelector('.main-video .title');
            listvideo.forEach(video => {
                video.onclick=()=>{
                    listvideo.forEach(vid => vid.classList.remove('active'));
                    video.classList.add('active');
                    if(video.classList.contains('active')){
                        let src=video.children[0].getAttribute('src');
                        mainvideo.src=src;
                        let text= video.children[1].innerHTML;
                        title.innerHTML=text;
                    };
                };
            });
        </script>
        </nav>

    </section>
    
</body>
</html>