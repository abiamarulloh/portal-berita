
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active">News details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="<?= base_url(); ?>assets/image_uploaded/<?= $news->image ?>" class="w-50" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title"><?= $news->title ?></h1>
                                <p>
                                    <?= $news->description ?>
                                </p>
                                
                            </div>
                        </div>
                        <div class="sn-related">
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="<?= base_url();?>assets/img/contoh/news-350x223-1.jpg" />
                                        <div class="sn-title">
                                            <a href="<?= base_url();?>single">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="<?= base_url();?>assets/img/contoh/news-350x223-2.jpg" />
                                        <div class="sn-title">
                                            <a href="<?= base_url();?>single">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="<?= base_url();?>assets/img/contoh/news-350x223-3.jpg" />
                                        <div class="sn-title">
                                            <a href="<?= base_url();?>single">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="<?= base_url();?>assets/img/contoh/news-350x223-4.jpg" />
                                        <div class="sn-title">
                                            <a href="<?= base_url();?>single">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">In This Category</h2>
                                <div class="news-list">
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="<?= base_url();?>assets/img/contoh/news-350x223-1.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="<?= base_url();?>assets/img/contoh/news-350x223-2.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="<?= base_url();?>assets/img/contoh/news-350x223-3.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="<?= base_url();?>assets/img/contoh/news-350x223-4.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="<?= base_url();?>assets/img/contoh/news-350x223-5.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/img/contoh/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-1.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-5.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-1.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-5.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="<?= base_url();?>assets/img/contoh/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="<?= base_url();?>single">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="<?= base_url();?>assets/img/contoh/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2 class="sw-title">News Category</h2>
                                <div class="category">
                                    <ul>
                                        <li><a href="<?= base_url();?>single">National</a><span>(98)</span></li>
                                        <li><a href="<?= base_url();?>single">International</a><span>(87)</span></li>
                                        <li><a href="<?= base_url();?>single">Economics</a><span>(76)</span></li>
                                        <li><a href="<?= base_url();?>single">Politics</a><span>(65)</span></li>
                                        <li><a href="<?= base_url();?>single">Lifestyle</a><span>(54)</span></li>
                                        <li><a href="<?= base_url();?>single">Technology</a><span>(43)</span></li>
                                        <li><a href="<?= base_url();?>single">Trades</a><span>(32)</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="<?= base_url();?>assets/img/contoh/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Tags Cloud</h2>
                                <div class="tags">
                                    <a href="<?= base_url();?>single">National</a>
                                    <a href="<?= base_url();?>single">International</a>
                                    <a href="<?= base_url();?>single">Economics</a>
                                    <a href="<?= base_url();?>single">Politics</a>
                                    <a href="<?= base_url();?>single">Lifestyle</a>
                                    <a href="<?= base_url();?>single">Technology</a>
                                    <a href="<?= base_url();?>single">Trades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
