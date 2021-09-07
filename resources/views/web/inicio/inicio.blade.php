<x-layout-web>
    <div class="app">
        {{-- Seccion del video principal --}}
        <section class="home-video-section__section-content">
            <div class="home-video-section__container">
                <iframe class="home-video-section__video" src="https://www.youtube.com/embed/9K_CZizKdVs?start=8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
        </section>
        {{-- Seccion del formulario --}}
        <section>
            <div class="form__section-content">
                <div class="form__container">
                    <div class="row m-0 espacio__default">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            <div class="form__content-image">
                                <img src=" {{ asset('img/logo.png') }} ">
                            </div>
                            <div class="form__content-registro espacio__default">
                                <article>
                                    <h1 class="form__titulo text-uppercase">Registro</h1>
                                </article>
                                <div class="form__inputs espacio__default">
                                    <div class="mb-4">
                                        <input type="text" class="form__form-control" id="nombre"
                                            placeholder="NOMBRE COMPLETO">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form__form-control" id="email" placeholder="E-MAIL">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form__form-control" id="pais" placeholder="PAÍS">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form__form-control" id="estado" placeholder="ESTADO">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="aviso">
                                        <label class="form-check-label text-uppercase" for="aviso">
                                            <small>Acepto aviso de privacidad</small>
                                        </label>
                                    </div>
                                    <button class="form__btn form__btn-primary">Enviar</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">

                        </div>
                    </div>
                    <div class="row m-0 espacio__default">
                        <div
                            class="col-lg-4 col-md-12 col-12 d-flex align-items-center justify-content-lg-end justify-content-center">
                            <div class="videos__content">
                                <div class="row m-0 p-0">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <iframe class="videos__video"
                                            src="https://www.youtube.com/embed/9K_CZizKdVs?start=8"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <iframe class="videos__video"
                                            src="https://www.youtube.com/embed/9K_CZizKdVs?start=8"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <iframe class="videos__video"
                                            src="https://www.youtube.com/embed/9K_CZizKdVs?start=8"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="blog__content">
                                <div class="row m-0 p-0">
                                    <div class="col-lg-6">
                                        <div class="blog__card d-flex align-items-center justify-content-lg-center">
                                            <article>
                                                <h4 class="blog__title text-uppercase mb-2">Unifica tu tono de piel</h4>
                                                <p class="blog__descripcion">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__card d-flex align-items-center justify-content-lg-center">
                                            <article>
                                                <h4 class="blog__title text-uppercase mb-2">Unifica tu tono de piel</h4>
                                                <p class="blog__descripcion">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__card d-flex align-items-center justify-content-lg-center">
                                            <article>
                                                <h4 class="blog__title text-uppercase mb-2">Unifica tu tono de piel</h4>
                                                <p class="blog__descripcion">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__card d-flex align-items-center justify-content-lg-center">
                                            <article>
                                                <h4 class="blog__title text-uppercase mb-2">Unifica tu tono de piel</h4>
                                                <p class="blog__descripcion">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__card d-flex align-items-center justify-content-lg-center">
                                            <article>
                                                <h4 class="blog__title text-uppercase mb-2">Unifica tu tono de piel</h4>
                                                <p class="blog__descripcion">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__card d-flex align-items-center justify-content-lg-center">
                                            <article>
                                                <h4 class="blog__title text-uppercase mb-2">Unifica tu tono de piel</h4>
                                                <p class="blog__descripcion">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4"></div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__section-content pb-4 d-flex align-items-center justify-content-center">
            <div class="footer__container">
                <p>*Consulta a tu médico. Salud es belleza.</p>
                <p>*Los consejos, tips y opiniones aquí mostrados no suplen la opinión experta de un médico dermatólogo.
                </p>
            </div>
        </section>
    </div>

</x-layout-web>
