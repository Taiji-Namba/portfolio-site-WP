<?php get_header(); ?>
  <!-- ファーストビュー -->
  <section class="first-view">
    <div class="first-view__message">
      <h1>TAIJI NAMBA</h1>
      <p>I'm a Web Engineer</p>
    </div>
  </section>

  <!-- メインコンテンツ -->
  <div class="main-content-bg">
    <div class="main-contents-wrapper">
      <div class="main-contents">
        <!-- Aboutセクション -->
        <section class="main-contents__section" id="about">
            <h2 class = "section-title fadeIn">About</h2>
            <div class = "profile_picture fadeIn">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/profile_compressed.png" alt="プロフィール写真">
            </div>
            <div class="txt-wrapper">
              <div class="txt-container--policy fadeIn">
                <h3 class="txt-container__title">Policy</h3>
                <p class="txt-container__txt">迅速なレスポンスと丁寧なコミュニケーションを常に心がけ、真摯に仕事に取り組みます。クライアント様の良いビジネスパートナーとなれるよう責任を持って、最善を尽くすことをお約束します。
                </p>
              </div>
              <div class="txt-container fadeIn">
                <h3 class="txt-container__title">A brief personal history</h3>
                <p class="txt-container__txt--large">Taiji Namba / 南塲 大慈</p>
                <p class="txt-container__txt">
                  1994年 大阪にて出生<br>
                  2017年 北海道大学 理学部 化学科 卒業<br>
                  2019年 北海道大学大学院 総合化学院 卒業<br>
                  2019年~ 東証一部大手素材メーカー 研究開発職<br>
                  2020年~ やんばるエキスパートにてRuby on Railsを用いたWebアプリケーションの開発、独学にてWebサイトの制作<br>
                  2021年 退職。個人事業主のWeb制作エンジニアに転身<br>
                </p>
              </div>
            </div>
        </section>

        <!-- Servicesセクション -->
        <section class="main-contents__section" id="services">
          <h2 class="section-title fadeIn">Services</h2>
          <div class="services fadeIn">
            <div class="services-menu service">
              <div class="service__icon">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/code_yellow.svg">
              </div>
              <div class="txt-wrapper">
                <div class="txt-container">
                  <h3 class="txt-container__title--service-title">コーディング</h3>
                  <p class="txt-container__txt">デザインの意図を理解し、動きや効果を適切に使用したコーディングを行います。また、レスポンシブデザインに対応いたします。</p>
                  <div class="txt-container__txt--price">
                    <p>
                      LP:¥20,000~/1p<br>
                      トップページ:¥20,000~/1p<br>
                      下層ページ:¥10,000~/1p<br>
                      レスポンシブ対応:¥5000~/1p
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="services-menu service">
              <div class="service__icon">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/devices.svg">
              </div>
              <div class="txt-wrapper">
                <div class="txt-container">
                  <h3 class="txt-container__title--service-title">LP/ホームページ制作</h3>
                  <p class="txt-container__txt">
                    しっかりとしたヒアリングによりご要望を的確に捉え、お客様の目的達成のための最適なLPやホームページを作成させていただきます。
                  </p>
                  <div class="txt-container__txt--price">
                    <p>
                      LP:¥30,000~/1p<br>
                      コーポレートサイト 10p以下:¥80,000~
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="services-menu service">
              <div class="service__icon">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/wordpress_icon.svg">
              </div>
              <div class="txt-wrapper">
                <div class="txt-container">
                  <h3 class="txt-container__title--service-title">WordPressサイト制作</h3>
                  <p class="txt-container__txt">
                    更新頻度の高いホームページやブログ、リアルタイムに情報発信が必要なWebサイトなどをWordPressで構築します。既存サイトのWordPress化も承ります。
                  </p>
                  <div class="txt-container__txt--price">
                    <p>
                      WordPress化:¥100,000~<br>
                      テンプレートテーマサイト:¥200,000~<br>
                      オリジナルテーマサイト:¥300,000~
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <p class = "txt-container__txt--center">上記料金は目安になります。正式なお見積りはお問い合わせ下さい。</p>
          </div>
        </section>

        <!-- Skillsセクション -->
        <section class="main-contents__section" id="skills">
          <h2 class="section-title fadeIn">Skills</h2>
          <div class="skills fadeIn">
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/html_3.svg" alt="HTML">
              <div class="skill-title">
                <p>HTML</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/css_3.svg" alt="CSS">
              <div class="skill-title">
                <p>CSS</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/sass_4.svg" alt="Sass">
              <div class="skill-title">
                <p>Sass</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/javascript_4.svg" alt="javaScript(jQuery)">
              <div class="skill-title">
                <p>JavaScript(jQuery)</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/wordpress_3.svg" alt="WordPress">
              <div class="skill-title">
                <p>WordPress</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/ruby_3.svg" alt="Ruby">
              <div class="skill-title">
                <p>Ruby</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/rails_3.svg" alt="Ruby on Rails">
              <div class="skill-title">
                <p>Rails</p>
              </div>
            </div>
            <div class="skills__item">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/github_3.svg" alt="GitHub">
              <div class="skill-title">
                <p>GitHub</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Worksセクション -->
        <section class="main-contents__section" id="works">
          <h2 class="section-title fadeIn">Works</h2>
          <div class="works fadeIn">
            <div class="works__item work">
              <a class="work__link" href="https://taiji-namba.github.io/yourbooks/" target="_blank" rel="noopener noreferrer">
                <div class="work__content js-hover-transition">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/lp_capture_small.png" alt="仮想LP">
                  <div class="mask"></div>
                  <div class="caption">
                    <p>"YourBooks"</p>
                    <p>オリジナル仮想LP</p>
                    <p>HTML | CSS | Sass | jQuery</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="works__item work">
              <a class="work__link" href="https://taiji-namba.github.io/portfolio-site/">
                <div class="work__content js-hover-transition">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/portfolio_site-capture_small.png" alt="ポートフォリオサイト">
                  <div class="mask"></div>
                  <div class="caption">
                    <p>"TAIJI NAMBA's Portfolio"</p>
                    <p>自己紹介サイト</p>
                    <p>HTML | CSS | Sass | jQuery | WordPress</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="works__item work">
              <a class="work__link" href="https://booksiru.com">
                <div class="work__content js-hover-transition">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/booksiru_capture_small.png" alt="Railsアプリケーション" target="_blank" rel="noopener noreferrer">
                  <div class="mask"></div>
                  <div class="caption">
                    <p>"ブクシル"</p>
                    <p>オリジナルWebアプリケーション</p>
                    <p>HTML | CSS | Sass | Ruby | Rails | Bootstrap</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </section>
        <!-- Contactセクション -->
        <section class="main-contents__section" id="contact">
          <h2 class="section-title fadeIn">Contact</h2>
          <div class="forms fadeIn">
            <?php echo apply_filters('the_content', '[contact-form-7 id="5" title="お問合せフォーム"]'); ?>
            <p>原則、翌々日までにご返信いたします。</p>
          </div>
        </section>
      </div>
    </div>
  </div>
<?php get_footer(); ?>