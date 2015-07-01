<?php
/**
 * Home Page Template For Webtastic-Development.net/simplex
 *
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Copywrite 2015 Kristopher Watts
 */

/**
 * Pull in the functions file (REQUIRED)
 */
require_once( 'parts/_functions.php' );

/* Grab required template pieces */
part( 'head', true );
part( 'header', true );

?>

<main>
    <section>
        <article class="card">
            <h1>Design A Day</h1>
            <h2>July 01, 2015</h2>
            <h2>Card Based Layout</h2>
            <p>
            To keep my frontend skills sharp, I've decided to code a new design every day.
            Sometimes these will be designs I've found ( on dribbble.com or elsewhere ) in which case I will give full credit to the author.
            This week is a custom designed card, inspired by Google's new Material Design.
            </p>
        </article>
        <article class="card blogPost">
            <h1>Blog Post Title</h1>
            <div class="blogInfo">
                <div class="avatar"></div>
                <h3>Kristopher Watts </br> July 01, 2015</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam ullamcorper laoreet. Quisque at tellus dolor. Sed euismod vel nibh sit amet mollis. Suspendisse ac diam in nunc varius rutrum. Mauris nibh magna, fermentum nec massa ut, varius commodo libero. Vivamus erat metus, interdum nec venenatis eget, suscipit eget leo. Mauris diam sem, venenatis vitae maximus eu, auctor sed est.</p>
            <blockquote><p>Lorem Ipsum</p></blockquote>
            <p>Integer vestibulum est leo, id posuere dui tincidunt non. Duis interdum nec nulla euismod volutpat. Ut finibus volutpat elementum. Mauris odio sem, euismod id magna ac, imperdiet blandit elit. Maecenas iaculis dui a sem cursus tristique. Quisque non lacus sapien. Pellentesque a dui in mauris semper tempor. Curabitur egestas accumsan elementum. Morbi lacinia lacus a egestas elementum. Nunc varius ac urna et pulvinar.</p>
            <p>Sed at tristique arcu. Vestibulum bibendum est fringilla risus interdum, vel bibendum velit placerat. Praesent gravida, neque rhoncus sodales porta, magna nulla condimentum magna, id suscipit ipsum velit ut enim. Mauris et ante eget nunc vestibulum rhoncus. Vestibulum blandit velit et diam sodales, id volutpat urna fermentum. Sed id erat non nibh facilisis ornare a ac metus. In lobortis enim ut purus facilisis luctus. Duis pharetra placerat bibendum. Aliquam fringilla ante convallis mollis vestibulum. Aenean molestie rhoncus sem at consequat. Duis quis consectetur sem, ac ornare ex. Curabitur at libero ac lorem consequat facilisis vel ac lectus. Morbi sollicitudin dignissim dolor, sed varius velit tincidunt ac. Nulla vitae rhoncus lectus. Phasellus quis commodo purus. Duis ornare libero in eros sodales, in varius dui mollis.</p>
            <p>Nullam nec sapien et ipsum dictum commodo maximus vel ante. Pellentesque id lectus euismod, tempor quam sit amet, luctus urna. Nulla facilisi. Nulla egestas vel elit eget viverra. Mauris quis sapien non felis viverra feugiat consequat auctor arcu. Fusce fermentum dui sed risus iaculis, sed euismod urna varius. Suspendisse fermentum, justo a volutpat eleifend, tortor ligula lobortis magna, id tempor elit arcu quis felis. Proin quis nisl et ligula efficitur ornare et facilisis augue. Nullam vestibulum nunc et condimentum vehicula. Donec suscipit id diam at feugiat. Vestibulum ac lacus malesuada turpis efficitur gravida. Nullam suscipit placerat ex ac commodo. Nullam aliquet augue sit amet nunc tincidunt, id porttitor orci elementum.</p>
            <p>Aliquam vitae blandit odio. Etiam scelerisque dignissim elit, a dapibus risus vulputate aliquam. Sed ac porta velit, ac sodales leo. Donec gravida tellus convallis, pretium odio hendrerit, egestas nunc. Ut lobortis mollis diam, eget volutpat eros scelerisque et. Sed neque dolor, suscipit quis nisi id, sodales sollicitudin sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur elementum diam id viverra. In tempus tellus non justo sodales sagittis. Phasellus vestibulum massa ac massa tristique, vel tempor dui scelerisque. </p>
        </article>
    </section>
</main>

<?php
part( 'footer', true );
?>
