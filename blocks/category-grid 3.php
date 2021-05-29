<style>
.grid-container {
    display: grid;
    grid-template-columns: 1fr;
    padding: var(--padding);
    grid-gap: var(--padding);
}

@media (min-width:768px) {
    .grid-container {
        display: grid;
        grid-template-columns: 3fr 2fr;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr auto;
        padding: 0;

    }
}

.grid-container .puff-teaser {
    margin: 0 !important;
}


.item1 {
    grid-row-start: 1;
    grid-row-end: 6;
}

.item1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.item {
    position: relative;
    height: var(--puff-height);
    width: 100%;
}


.item figure {
    height: var(--puff-height);
    width: var(--puff-width);
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;

    z-index: 2;
}

.item header {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    padding: 0;
    z-index: 1;
    padding: 0;
    padding-right: var(--padding-small);
    padding-left: calc(var(--puff-width) + var(--padding-small));
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    text-align: left !important;

}

.item .kicker {
    text-align: left;
}

.item .headline {
    font-weight: var(--regular);
    font-size: var(--p);
    line-height: 1.4;
    color: var(--color-black);
    margin: 0;
    text-align: left;
}

.item img,
.item picture {
    height: 100%;
    width: 100%;
    display: block;
    position: absolute;
    top: 0;
    left: 0;

}

.news-block {
    padding: var(--padding);
}

.news-block .more {
    text-align: right;
    color: var(--color);
    float: right;
    border-top: 1px solid var(--color-grey-half);
    border-bottom: 1px solid var(--color-grey-half);
    display: flex;
    justify-content: center;
    align-items: flex-end;
    flex-direction: column;
    font-size: var(--teaser-headline);
    font-weight: var(--heavy);
    padding: var(--padding-small) 0;
}

.section-header .headline {
    font-size: calc(var(--teaser-headline) * 2);
    line-height: 1;
    padding-bottom: var(--padding-xsmall);
    border-bottom: var(--color) 4px solid;
}
</style>

<div class="grid-container w-max news-block">
    <div class="item1">

        <header class="section-header">
            <h2 class="headline">LATEST</h2>
        </header>

        <article class="teaser teaser_standard bg-white">
            <a href="https://www.lads.guide/learn/help-overcome-fear-of-flying-phobia/"
                title="10 ways to overcome fear of flying" class="" value="10 ways to overcome fear of flying">

                <figure class="bg-white prefade ratio" data-ratio="16x9">
                    <picture>
                        <source type="image/jpeg" media="(min-width: 461px)"
                            srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                        <source type="image/jpeg" media="(max-width: 460px)"
                            srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            alt="10 ways to overcome fear of flying" class="lazyload" loading="lazy">
                    </picture>
                </figure>
                <header class="header bg-white postfade">
                    <strong class="kicker">Aviophobia</strong>
                    <h6 class="headline">7 ways to overcome fear of flying</h6>
                    <p>Scared of getting on a plane? Here&#039;s a list of techniques you can use to
                        cure your fear of flying.</p>
                </header>
            </a>
        </article>

    </div>

    <a href="#" title="title" class="item bg-white">
        <figure class="">
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="10 ways to overcome fear of flying" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header">
            <strong class="kicker">Aviophobia</strong>
            <h6 class="headline">7 ways to overcome fear of flying</h6>
        </header>
    </a>

    <a href="#" title="title" class="item bg-white">
        <figure class="">
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="10 ways to overcome fear of flying" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header">
            <strong class="kicker">Aviophobia</strong>
            <h6 class="headline">7 ways to overcome fear of flying</h6>
        </header>
    </a>

    <a href="#" title="title" class="item bg-white">
        <figure class="">
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="10 ways to overcome fear of flying" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header">
            <strong class="kicker">Aviophobia</strong>
            <h6 class="headline">7 ways to overcome fear of flying</h6>
        </header>
    </a>

    <a href="#" title="title" class="item bg-white">
        <figure class="">
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="https://i0.wp.com/lads.guide/wp-content/uploads/fear-of-flying-cure-360x180.jpg">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="10 ways to overcome fear of flying" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header">
            <strong class="kicker">Aviophobia</strong>
            <h6 class="headline">7 ways to overcome fear of flying</h6>
        </header>
    </a>

    <a href="#" class="more">MORE </a>

</div>