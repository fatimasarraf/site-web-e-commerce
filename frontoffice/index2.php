<?php require("database.php");
$categories=$bdd->query("SELECT * FROM categories ")->fetchALL(PDO::FETCH_OBJ);?>

<html lang="en">
<head>
    <meta charset="UTF-8"><?php require("database.php");
    $categories=$bdd->query("SELECT * FROM categories ")->fetchALL(PDO::FETCH_OBJ);?>


    <!DOCTYPE html>
    <html lang="en">
            <head>

                   <link rel="stylesheet" href="stylenvindex.css">


                </head>
    <body>




            <div class="navbar">
                    <h1 class="logo"><span class="ros">O</span><span class="oum">UMWARD</span>
                    <a href="../backoffice/nav.php"> ←</a>
                    <div class="labo">laboratoires</div> </h1>
                <ul>
                    <li><a href="index2.php" class="a1">Home</a></li>
                    <li><a href="connexion.php" class="a1">connexion</a></li>
                    <li><a href="SeConnecter.php" class="a1">inscription</a></li>
                    <li><a href="" class="a1">A propos de nous </a></li>

                  
                </ul>
            </div>





    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>
    <section>
            <div class="section">
              <div class="section1">
                <div class="img-slider">
                  <img src="https://www.iamlamode.com/wp-content/uploads/2021/09/Les-produits-cosmetiques-les-plus-vendus-en-France.jpg" alt="" class="img">
                  <img src="https://www.prodigia-cosmetics.com/wp-content/uploads/2020/11/article-2.jpg" alt="" class="img">
                  <img src="https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img">
                  <img src="https://images.pexels.com/photos/8154655/pexels-photo-8154655.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img">
                  <img src="https://images.pexels.com/photos/6955174/pexels-photo-6955174.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img">
                </div>

              </div>



                  </div>

                  </div>
                </div>

              </div>
            </div>

          </section>
<?php include'frontcategories.php' ?>
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>NOS AVANTAGES</h3>
                <p class="posi">Pour prendre soin de la peau du visage et du corps jour après jour.
     </p>
                <a href="#" class="btn">vendez maintenant</a>
            </div>



    </section>


    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>livraison gratuite</h3>

            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>diponible 24/7</h3>

            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>retour facile</h3>

            </div>
        </div>



    </section>



    <section class="secproduits">
        <div class="titre2"><h2><h3 class="ka">plus vendu</h3></div>
        <div class="rendreflex">
            <div class="flex"><a href="" class="zin"><img src="image/img10.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>00 DH</p></div>
            <div class="flex"><a href=""><img src="image/img5.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>15 DH</p></div>
            <div class="flex"><a href=""><img src="image/img6.jpg" alt="" class="imgg2"></a><p class="P1"> <span>1</span>20 DH</p></div>
            <div class="flex"><a href=""><img src="image/img7.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>10 DH</p></div>
            <div class="flex"><a href=""><img src="image/img8.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>13 DH</p></div>
            <div class="flex"><a href=""><img src="image/img10.jpg" alt="" class="imgg2"></a><p class="P1"> <span>1</span>05 DH</p></div>

        </div>


    </section>





    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>Avis des Clients</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="https://static1.purepeople.com/articles/8/40/84/58/@/5877854-annily-chatelain-sur-instagram-624x600-3.jpg" alt="">
                    <h3>salma fathi</h3>
                    <p>J'ai acheté une creme chez vous,elle est livre  rapidement. Le prix est agréable.  Je me suis tres satisfaite.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="https://static1.purepeople.com/articles/8/40/84/58/@/5877854-annily-chatelain-sur-instagram-624x600-3.jpg" alt="">
                    <h3>lamiae sabiri</h3>
                    <p>J'ai acheté une creme chez vous,elle est livre  rapidement. Le prix est agréable.  Je me suis tres satisfaite.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFRUYGBgYGRgaGBgYGBgZGBwYGRkaGhgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISGjQhISE0NDQ0NDQ0NDQ0NDQ0NDU0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0MTQ0NDQ0NDQ0MTU0NDQ0NP/AABEIAP8AxgMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAQIDBAYAB//EAEQQAAEDAQQGBwUECgEEAwAAAAEAAhEDBBIhMQVBUWFxgQYikaGxwfAHMkJS0RNykrIjYoKDhKLCw+HxFCRDRGMzNNL/xAAZAQADAQEBAAAAAAAAAAAAAAAAAgMBBAX/xAAhEQACAgEFAQEBAQAAAAAAAAAAAQIRIQMSMTJBIlFhE//aAAwDAQACEQMRAD8A9O0uOs37vmqF1EdLe83h5qhCDSJzUwhTkKNwWAMlPZUTSE1AFllaFQ0ppIN6rfePcNp3JK9ougnYs29zqj8PjxJke6D4E+CSUvDaLlmN8l7jLW5Tr3+tylpMNR3EyTsGocVC5skU2ZDFx1yckVoUwwQBq7v8lJZqR2mLR9lZXFmBd1GeE+JWAo2Bzlt+kxllNgyz8R5IfY7Mhyo1R3Ayz6GnNTO0HhgtHRoqc0wjcx9iMVVsBbqKiIdORWvtNmB1ILaaELVISUKO0fUIwnPxWgs73hsdfk7yWcsDmte2/wC7OY361tadiZ8v8zh4KiEooGs75n9kpv2k/HP3mIsLIz5f53/VKLO35f5nLTKIrGOqDhi4nDLD/StJGsiNgnvT0DDUhSrigwuaM+Ll5rkujfi5ea5aYQaW95vDzVFX9K+83h5qig0QphCeUiwCItUbxAVkN9eKhtbIHrNLJjRQD0o8mGDWY37yoA0MH6xwAHygSB3K0+JLyMBgOX+fBV7Gwvc57vdGW+Y9cwo3kdosaPow287M4nnqRBggScCcTuAxj1vUYZiBqzPkPWxOtB6ruBj8viSmBIp6VxubmN75PmnWZiW34vG5rU+zhI+SkVgttSuXNSOKYYieUJ0ixFXFU7U2QgRgEkEEbFu9EVr9Jh3R2Lz6o+HHj44LT9ELSYcw5SS3jAkd/cVSLIvk065KuTmDVyVcgBE1OXIAt6O+Ll5rkujvi5ea5aKQaV95vDzVBzlf0qOsOHmhVdsQsbHjFyWCQFOCrBxVuz05xKyw21yTMZ3+AVK35xs8URIQrSFSATns3qcmMgNbTIDBr8Ar9ks91obsgneT6KbZLMcHHPPmcVeDIEaziUqQxXf1Rvy5nWqtqfEb3ho4NEnvVi0PEjdl4kobbXzVY35AJ+88ye5DMJLW7r93gpqJQ+pVl7hvHgr7Dgl9LRwid9qa3MgKu/SLPnHaqVrsgqYEkcFXp6EZ8TnHnCa0DsJttjHYBwKWoq40dS+XHbJlNaxzXReluqcxz1hArM9pYXH45H/XmjPQ+qXPz4jfdcJ70L6TswaVY6EuP243tPkniQlyejBcQlalhUMGlInEJCgBEiWFyALej/i5ea5dYPi5ea5aYRaT94cPNCbSetwRbSR67eBQuqyXE6kki+lwJSZPrUrlHuyHrtUNMZ7Ijw/yrlBmCxIJMa8wCUIrUy53rAbeKLWgA4FV6TM3a3GAlayKmRtpjkPFQWl90RrPoBEKjQxsnVigr33i52ye0rHgOSNsFxcT1WjHkJPkgzKhdUc873Hng0d/cr1vqXWXNbsXfdnAc8VQDbo/Wc6TyxjkAkbNSIWVJqnfCMnJCLHR687h67kYhKiqWCjarQWYDPtPIIa/S1110tfMkcxnrR6pQa7MBD7RodjjMntOa2KXoS3Vgho6SBIhx4OwKIsdKqt0OyZMk7SVfp0Q0Qj3ANYyAOlDOoziUS6C2SC57iMWgNGvPreAVfT1C+GAbT5Iz0PshZfnVdHdJVYyykRceWadmScuASqpMbCQhOSIAakIT0iALNg+Ll5pV1h+Ll5pVphBpAdYcPNC72PH6otpD3hwKFhuPH0Esjo0+papNxHNWw2Aq1jE48vql0hUusO/BHCslJ5or2mpOAzcQBulXKVEchgPMqlo6kSbztUxzOHcB2q7aalxhjPILEvWY/wF6Ur3nXBkM/NUrS9rGXncY2nUFZawAF7tfggml7TLpdkALrPCfprUpP0ol4VXEk33e889UbtRO5NJkncI+p8UxhPvOPWd3N/ypmNAgZDM+vWak2VjEnsNMyTCne6CpbM9t3yVI2prnlmMgTMG7+LKUXRXaXGFP+zUNj18cFbK1AkRQmOcpHlVnvWmSSBukyXPAbiWwYG9bHQ9G6ze43j4DuCzNEAne4xK2NmbDW8B4Kmms2c+o8USrkq5WIiJEq5ACJE5ItMLNi+Ll5rl1i+Ll5rkGEOk/LzQxjo3wOcohpd2Xraq9lp6ylfJeLqJcoU7rQAq9pZfcNjceeQCtF2Cjotwk7Z+iH+E79H02QIVO0m86NQ7yrlV8BDqr7oPresk/AivQZpS1xgOA8yVm3Eve57vdB/ETkPqrdcF7zBwAzOWOZQbSVt6xYzBjM3bXH3nHYB9FBrcUTovsfJOM7T5BWS3CTrQmwV2vwGQ79pVmvantyEjUdnFTeDphngI0ntAxKf9m0oS22v1sdygqVttcIwf2f5WFnpug3RbCnBQanpBzjAYSewcyiNNxIkp0SeB9QoJ0gtNyzvcDBIug65cbuHajNRZDpla/cpDMm+7gMG+LuxNFWyU5YLnRNz3uaXuJjaSV6VSGA4LAdEacFvA9sYL0AFWgc0hy5JK6U5hy5dKRACpF0rpWmFqxfFy81y6xfFy81yDCtpMS5o3HxSUhjwCkt+Dgd3moqGvgl9K38jji3j54BSM7hgkiBwSswbPEoXIjK1pfjuGPE6gglvqkm4Dql54nJXrfaAMdmJ8lmrZXIY7a447ySJlRlLJRKkQ1LRgQz4jq18VkNO17vUZjPWe4YguOEAjUO9H69e6wxqGPLC74LH6QZLpOyDyJRFqzGi5oW23YaTie2B67lrLO+8Nq81e4gzMHACO0+S13R7SMw15x1HajVh6imlLxmmZZ4yTxZpVqgJU4YFKjr3sr0qAAU7U2o8BR3nHctSISkR2+1NYxzzk0E78BK85ZWdWtF9+bsY1AahyELa6eZNF4mJacd2tZnQNlD6vVGAho3gQJ4k+KrHhkZvJstDvbTa0mZEOPAT5K+zpdZz8ccQQhtZwbUubBHJt0YdpXmtvc5lR7JPVcW5nUYTwXhKTo9np6fouyqN7YVunpJjsntPAheENtjxr7gpWaSeNfj9VXaJuPd22obU8WgbV4nS069uTnDg4hX6PSmqPjf3HxRtYbj18VwnCqF5XS6YVB8U8WjyV2h00drDe8LKYbkep6PdN7l5rkB6E6a/5H2vVAuXMjPvX/wD8rkG2G7eOsOHmm2fWVW05abjmgDEjzT7ISGXnZk4eSW8j+Er3S6Bqz71DpGpDQB8Rx3NGJ8hzVmm4HIoJ0htBu9UEny+uSyTqLCKyCNJ6RBdAOv6YDuQ61tIEfq4DecSeQQr7T9IHOMNbmNpOwazijVuZLgTgHMAbzbj4rmfFlf4As2lu8z24SgFuZPae/WjlI9Yjh3a+xULRT97kRxPruQpUwrBnLWyHAbI7dfei2jmYBUqjLzt8dw1+tyL6NZgqzl8hFZDmjba8G7ekb/qj9F7iMSs9ZacFaCzHBRTKtk7WKQhcwJHphWCdN0i+jUaMyx0cYwVrofoE0mB7xDomD8MjM74mBqkziYDnDFTWvpdZ6U06hcx/2d5pu3mOcZEC5LgZEyQBjmng7dE5r0zlqtk2ifmv98EflKx/Soxaqv3ge1oRinaA+p1XSDUhpGsGGDDg6VnukNYPtNZw+dw/B1R3NVYr6Iy4KQeuDsVGErDirCkzXJ4eoGlOlArRK6tCcy0Km9yfSK0w9b9jb5/5X7j+8uUXsVONr/h/7yVKxkbzSVG9VZsDcTunLiVTt1qvODGZNzI1ahG07OKs6crEQ1rmtJGZvbY1A+sEGZXbTbIxJyJzc7bGof61lQlKnRaKtBpjrou4SBju2Dkh2kXD7OTsMk7iRPaFDZLSXEyconi7/DfBQaSqzTAnAjrHcMXeayTtGpZMHpf3+rgDB39frDuR2rWvMpv/AFW9rZbH8pQ21U78ujETd/ax7hjzKWjUP2YaNTj2Okt77w/aUJO1RSKp2Vni7UI3kctR7IUdYfl70+3u6zH/ADAdohvkEr2Se3vxCRjIztRl2oI1FG7BTxw1qtVoS+eCIaPbiPXrNO5WjIoK0GIlQKqMapmuWJjhRhwUdQptN+CY963cZRVtlpaxpc7UCV5fb7Y6rUc92bjgNgyA5DzWo6Z2+6wMBxecv1Rn3x3rFh8CdZy+qvoxxuIass0F9F1w2oHn3aTS88cQANuJ7kFe8kkk4kyeJzVmq+4y58TjL92xvLEcS4alRldEV6RbJWlLCilOBWiklw7kx74wTmldVZInWM+CKNZBKlY8BQhKCmFPXPYk6TbP4f8AvLkz2Gf+Z/D/AN5KpvkdGu6WWgMc2flwGs4x5rPsqF/WOsGNwGzvKLdNxNSm0Zluf7UDxQhwAN0e62GngcD3Sexck+zOiHUu0alymXbQ5555DsAVRr7zGtz6oneAJPbA7Ummalym/g0cpE9wKi0WTeE6mtw5YrVlA+SvbrORgMxmdr3/AECD2moG1RHu+64bwZPYYI5LT6RBEbcz945nkJ7FjgZvn9odpHgp+jli2MJpOjNjrw3jWe4HtU5ggO1EA+uSZYaoLwx2Tm3Z3xMHuVhlAhl3W0kdim+KGXNkTqMlWrNZoS0BgFdYEDocBgomv6ynKRlPFFjUWGkrjT2pzAhnSXSP2NB7gYceqzbedhI3gSf2VqjboxulZ5/0htf2lpeRiAbjBubhPM3jzQy+G4zLtuocN6je/CBgNg8yoiV6MY0qPPk7djy5JKauCcwdKUJspQUCjwVK1yhCcCgBlRsHcU0KWoJHBRBaYet+w3/y/wCH/vLl3sOH/wBv+H/vLlN8jo1PSpn/AFFN3y03fmQDRzw95nIyOXn7qOdN33XB36kDm4+uSylO0CkwP1hwP4Ted4RzXJLszoj1CHSodQTk64DxLXfVRaNqi+8kwGtnsAHiFd6WUQWM31G8/eAHnyQB9WYAze+YHygw2eKG6CrdhXSFbql5+Ukccp7SBzWYoNzG2fP6d6K6VqfCMcQBvDNfAuPchtWGt4g9mSRvI8eCrZnEvLhqM8/QWnfBx+cTzGBQGy08OKM2Yy2Plx5OwPfHapyyUSGUGwXDge6PJXmBV2N6/EeB/wAq00LEOKFMxiaxqmC1AcvO+nWkL9UUgcGCT990HubH4itzpS2No0n1HZNbMbTk1vMkDmvILRWc9xe4y5xJcdpJkrp0IW934c+tKlRC5IlKauw5TkoSLjkgDgU5ManBaKPCcmtTwgGO1HgoWhXbHRvvaz5nBuzMxmr9fo9WafcJG4g+C1RbElJJ02b/ANiGds/h/wC8uUvsZoOYbWHNIP8A0+f75cpvkouAr7RKsPpN2tJ7CVitIVZLWDG6Md5xJ+i13tGdFekdjCexxWFszuteOJMx2euxcrX0zoj1N1p116zU3a4Y7mW4+Kzuimy91SQbjTd+8Ja2eyUT0pWd/wAOmJ6xDAObZB70IpOuUiBm7qg7sMUknlsZLAx7w4l3wjAbwNfbPaFBaHSeURq2+fcpahAhupsE+Q9bV1GnjJz2KX9KfwmpMyV6zshwG1rh4HxUdJit0mdZvA+SUouB7WdZvA+u5TEJHjrDgT67Uj3rQJqalUNEKrp7SYs9FzzBdkxp1vOXIYk7gURTbpA2krMj080reeKDDgzrP3vI6reQM8SNixpUleo5zi5xJc4kuJzJJkk81EV6UI7Y0cE5bpWIUiUrk4p0JHZJyRyAGtTwmNT2rQHgJ7UwBSNQKW7AP0jPvs3/ABDUt7ol+Lw6ZvQBeIgDCQDMg4mMFgbK+69rvlcD2GVv6OlqdWoC1zZukwARkXNAO+Lvatj2WSOqltbqzc9DxjV/d/1pEvQp0/bfu/By5ZqSubG0Y/CM77U3RVpb2Edr1jqDO7AccvMlbH2nsm0UNgpu/MspSGMD0dQ7+5cU+x2w4Duman6OkwfcH7LQyewKhaXhurBggb3EY8su0qxan3nMcT7rS4cX4g8kJttp2cce6VFu3RRYyOL4gnrOJkjfGE/RXbEycTmc+xBX1LovHPV4ye1GOjNS+wu/XcOQj/fNa4OrCMs0GaVNSNHW4CPr5KRogKNp17SptFExHux5evBQNfLlFaa8c1PYKesrORi/TbAXmHSvTH/IrG6eoyWs3/M/nHYAj3TPpAADZqR3VXD8gPj2bVhHFdujp19M5dad/KGkpCuXLpICJUpCQoA5IUqYc0AK0JwXNCeGoFFaFI0JrWqRgWmsmpDFFbDZg910NJccg0SSdgA5odZ24r0foPoa7aWPM9Vj3wRtbdn+dK3Qii2a7oR0fdZWvvVLxqCmS2D1S2/Ik5+9uySLR2bN3LzXJSm0wPtJH6ekf/W78yyNJ0FgzLns7AR9Stj7RWTWpfcI/mM+tyzOiqN+reOVMFxOq8SYH4j3rkm/pnRBfKFt5uSPlhv4QGjv8EEIxk7Z/wBohpOriBndBceJ9d6EV3lrCTi46tmrFLBWbJla3VSWzty4f6Wg6G2htxzJF4OvciBj2grMWkk74geBVejWcxwLXEEZEGD2rp2XGiW6nZ6oX4KCvUgZrG2bpPUAh7Q/f7p5xh3Kar0mYR7jwf2T5qEtGX4WjqR/Qqat+oG6hiVQ050mutNKzu62T6gyG5h1nfq1bs3adIvdeglodmBrGwnyVBxVdPRp3ISetapCOcmFPTCuggIuSpFoHFcuXIFOhNIxUgCW4c4QMcwKUNTmMTvs1go0NT2hKGJwatMZPZwvetB0w1jD+owdw+i8For1mwdJyGgPpg4DFjoOXyu+qSUlHkaEW7o3VldJdy81yHaA0iytfuXurdkOEETejjkUizchqaM37Qx+lpfcP5is7Zuq1rG5vILz2eu1aD2iuirTOym78yE2ah1mbeq1cer2Z0afBnbc/rvP6x7G5BCLS4ntx4+iUXtTJJ3uP+PFDWtm9uKpASTBduJmN890BVipbS6XE7Y8Aq66orBF8jpSOcuuroWgMlNITyU1aAiSE5dCBRsJIT4SFqAGwuATw1cAgBWBanoZQDnmRIwWaY1bboJQxc6Nngp6r+SsF9GktPRWzVMTTuHaw3ecDA9iD2roEP8At1uT2/1NPktuxuCUhc++S9Lf5xfh5jaOh1pZk1r/ALrh/VCH1NAWludF/IT4SvW3BQvCZa0hXoo8pp6NqzjTeNstcB2kLUNO+Ub0kYY71rQEv2hS1JuTQ+nDbZtvZ6f/AJ/3f9a5N9nZH6eP/X/WkVodURn2ZX6e0S+0Uhq+zdP4o+qgbTuuB2PZ+ZE+m1S49joxLbo/ESoX05Y7e1rhxAnyUNTMmVh1MNpFkOgZTHZghdfJ5yFx5HEwPHxR/TNDBxnG8SN4gdmaAW3Ci87Td7XNPkqaYkzO1M00uTw1LG5daINkMlJBU91JC0yyEMS3VLCbdQAyF0J91JdWgMhLCddXXVgDQPXNKAnNanBiAFptXpfQuy3aIJ+KT9F59YqBc5rR8RA7V69oygGMa0ZAAKOq/C2ks2X2hKU4BI4LnZ0oicoKhU7lBUWAwTpU9TiQgZRnTB6o4+SDRsSS5NRtPZ1/3/3X9a5d7OZ/Tz/6v7iRdMOqObU7M//Z" alt="">
                    <h3>sara el alami</h3>
                    <p>J'ai acheté une creme chez vous,elle est livre  rapidement. Le prix est agréable.  Je me suis tres satisfaite.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="https://static1.purepeople.com/articles/8/40/84/58/@/5877854-annily-chatelain-sur-instagram-624x600-3.jpg" alt="">
                    <h3>fatima sarraf</h3>
                    <p>J'ai acheté une creme chez vous,elle est livre  rapidement. Le prix est agréable.  Je me suis tres satisfaite.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>





            </div>

        </div>

    </section>


    <div class="footer">
        <div class="foot">
          <h3>Nos Services</h3>
          <div class="foot1">
          <ul >
          <li><a  href="#">Livraison <br> <br> Vente En ligne</a></li>


            </ul>
          </div>
          </div>
        <div class="foot">
        <h3>Reston en contact</h3>
          <div  class="foot2">
        <p>  0687345216</p> <br>
        <p> oumward@gmail.com</p> <br>
        <p>  6 rue de l'invention,Marocde </p>
        </div>
          </div>

        <div class="foot footf">
           <h3>Nos reseaux</h3>
          <div class="foot4">
          <ul >
          <li><a href="#"> <img src="image/fb.jpg"  width="20px" height ="20px "alt="" class="i">   <i class="fa-brands fa-square-facebook"></i>   Facebook </a></li>
            <li><a href="#"><img src="image/insta.jpg" width="20px" height ="20px "alt="" class="i"><i class="fa-brands fa-square-instagram"></i>   Instagram</a></li>
            <li><a href="#"> <img src="image/twit.jpg"width="20px" height ="20px " alt="" class="i"><i class="fa-brands fa-linkedin"></i>   Twiter</a></li>
            <li><a href="#"> <img src="image/yout.jpg"width="20px" height ="20px " alt="" class="i"><i  class="fa-brands fa-youtube"></i>   YouTube</a></li>
        </ul>
        </div>

    </div> <hr>
    <div class="copyright">©oumward.com 2022 tout droits réservés

    </div>
      </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>searchForm = document.querySelector('.search-form');

            document.querySelector('#search-btn').onclick = () =>{
              searchForm.classList.toggle('active');
            }

            let loginForm = document.querySelector('.login-form-container');

            document.querySelector('#login-btn').onclick = () =>{
              loginForm.classList.toggle('active');
            }

            document.querySelector('#close-login-btn').onclick = () =>{
              loginForm.classList.remove('active');
            }

            window.onscroll = () =>{

              searchForm.classList.remove('active');

              if(window.scrollY > 80){
                document.querySelector('.header .header-2').classList.add('active');
              }else{
                document.querySelector('.header .header-2').classList.remove('active');
              }

            }

            window.onload = () =>{

              if(window.scrollY > 80){
                document.querySelector('.header .header-2').classList.add('active');
              }else{
                document.querySelector('.header .header-2').classList.remove('active');
              }

              fadeOut();

            }

            function loader(){
              document.querySelector('.loader-container').classList.add('active');
            }

            function fadeOut(){
              setTimeout(loader, 4000);
            }

            var swiper = new Swiper(".books-slider", {
              loop:true,
              centeredSlides: true,
              autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
              breakpoints: {
                0: {
                  slidesPerView: 1,
                },
                768: {
                  slidesPerView: 2,
                },
                1024: {
                  slidesPerView: 3,
                },
              },
            });

            var swiper = new Swiper(".featured-slider", {
              spaceBetween: 10,
              loop:true,
              centeredSlides: true,
              autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              breakpoints: {
                0: {
                  slidesPerView: 1,
                },
                450: {
                  slidesPerView: 2,
                },
                768: {
                  slidesPerView: 3,
                },
                1024: {
                  slidesPerView: 4,
                },
              },
            });

            var swiper = new Swiper(".arrivals-slider", {
              spaceBetween: 10,
              loop:true,
              centeredSlides: true,
              autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
              breakpoints: {
                0: {
                  slidesPerView: 1,
                },
                768: {
                  slidesPerView: 2,
                },
                1024: {
                  slidesPerView: 3,
                },
              },
            });

            var swiper = new Swiper(".reviews-slider", {
              spaceBetween: 10,
              grabCursor:true,
              loop:true,
              centeredSlides: true,
              autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
              breakpoints: {
                0: {
                  slidesPerView: 1,
                },
                768: {
                  slidesPerView: 2,
                },
                1024: {
                  slidesPerView: 3,
                },
              },
            });

            var swiper = new Swiper(".blogs-slider", {
              spaceBetween: 10,
              grabCursor:true,
              loop:true,
              centeredSlides: true,
              autoplay: {
                delay: 9500,
                disableOnInteraction: false,
              },
              breakpoints: {
                0: {
                  slidesPerView: 1,
                },
                768: {
                  slidesPerView: 2,
                },
                1024: {
                  slidesPerView: 3,
                },
              },
            });


            const close = document.querySelector(".close");
                const open = document.querySelector(".ham");
                const menu = document.querySelector(".menu");
                close.addEventListener("click", () => {
                  menu.style.visibility = "hidden";
                });
                open.addEventListener("click", () => {
                  menu.style.visibility = "visible";
                });



                </script>
    </body>
    </html>
