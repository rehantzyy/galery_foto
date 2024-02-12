@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <!--Main layout-->
    <main class="mt-4 mb-5">
        <div class="container">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <!--Section: Post data-mdb-->
                    <section class="border-bottom mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg"
                            class="img-fluid shadow-2-strong rounded mb-4" alt="" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.3 10.08A3 3 0 0 0 19 9h-4.56L15 7.57A4.13 4.13 0 0 0 11.11 2a1 1 0 0 0-.91.59L7.35 9H5a3 3 0 0 0-3 3v7a3 3 0 0 0 3 3h12.73a3 3 0 0 0 2.95-2.46l1.27-7a3 3 0 0 0-.65-2.46M7 20H5a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1h2Zm13-7.82l-1.27 7a1 1 0 0 1-1 .82H9v-9.79l2.72-6.12a2.11 2.11 0 0 1 1.38 2.78l-.53 1.43a2 2 0 0 0 1.87 2.7H19a1 1 0 0 1 .77.36a1 1 0 0 1 .23.82" />
                        </svg>
                        <span>1000</span>
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg"
                                    class="rounded shadow-1-strong me-2" height="35" alt="" loading="lazy" />

                                <span> Published <u>15.07.2023</u> by</span>
                                <a href="" class="text-dark">Reyy</a>

                            </div>


                        </div>
                    </section>
                    <!--Section: Post data-mdb-->

                    <!--Section: Text-->
                    <section>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sapiente molestias
                            consectetur. Fuga nulla officia error placeat veniam, officiis rerum laboriosam
                            ullam molestiae magni velit laborum itaque minima doloribus eligendi! Lorem ipsum,
                            dolor sit amet consectetur adipisicing elit. Optio sapiente molestias consectetur.
                            Fuga nulla officia error placeat veniam, officiis rerum laboriosam ullam molestiae
                            magni velit laborum itaque minima doloribus eligendi!
                        </p>

                        <p><strong>Optio sapiente molestias consectetur?</strong></p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto ex ab aut
                            tempora officia libero praesentium, sint id magnam eius natus unde blanditiis. Autem
                            adipisci totam sit consequuntur eligendi.
                        </p>

                        <p class="note note-light">
                            <strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Optio odit consequatur porro sequi ab distinctio modi. Rerum cum dolores sint,
                            adipisci ad veritatis laborum eaque illum saepe mollitia ut voluptatum.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, libero repellat
                            molestiae aperiam laborum aliquid atque magni nostrum, inventore perspiciatis
                            possimus quia incidunt maiores molestias eaque nam commodi! Magnam, labore.
                        </p>



                        <ul>
                            <li>Lorem</li>
                            <li>Ipsum</li>
                            <li>Dolor</li>
                            <li>Sit</li>
                            <li>Amet</li>
                        </ul>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, temporibus nulla
                            voluptatibus accusantium sapiente doloremque. Doloribus ratione laboriosam culpa. Ab
                            officiis quidem, debitis nostrum in accusantium dolore veritatis eius est?
                        </p>
                    </section>
                    <!--Section: Text-->

                    <!--Section: Share buttons-->

                    <!--Section: Share buttons-->

                    <!--Section: Author-->

                    <!--Section: Author-->
                    <section>
                        <p class="text-center"><strong>Comment</strong></p>

                        <form>
                            <!-- Message input -->
                            <div class="form-outline mb-4" data-mdb-input-init>
                                <textarea class="form-control" id="form4Example3" rows="4"></textarea>

                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                                Publish
                            </button>
                        </form>
                    </section>
                    <!--Section: Comments-->
                    <section class="border-bottom mb-3">
                        <p class="text-center"><strong>Comments: 3</strong></p>

                        <!-- Comment -->
                        <div class="row mb-4">
                            <div class="col-2">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                                    class="img-fluid shadow-1-strong rounded" alt="" />
                            </div>

                            <div class="col-10">
                                <p class="mb-2"><strong>Marta Dolores</strong></p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                    inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                    Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                </p>
                            </div>
                        </div>

                        <!-- Comment -->
                        <div class="row mb-4">
                            <div class="col-2">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
                                    class="img-fluid shadow-1-strong rounded" alt="" />
                            </div>

                            <div class="col-10">
                                <p class="mb-2"><strong>Valeria Groove</strong></p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                    inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                    Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                </p>
                            </div>
                        </div>

                        <!-- Comment -->
                        <div class="row mb-4">
                            <div class="col-2">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                                    class="img-fluid shadow-1-strong rounded" alt="" />
                            </div>

                            <div class="col-10">
                                <p class="mb-2"><strong>Antonia Velez</strong></p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                    inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                    Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                </p>
                            </div>
                        </div>
                    </section>
                    <!--Section: Comments-->

                    <!--Section: Reply-->

                    <!--Section: Reply-->
                </div>
                <!--Grid column-->


            </div>
            <!--Grid row-->
        </div>
    </main>
    <!--Main layout-->
@endsection
