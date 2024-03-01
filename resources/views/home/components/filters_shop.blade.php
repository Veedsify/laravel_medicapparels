  <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
      <div class="aside-header d-flex d-lg-none align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
      </div><!-- /.aside-header -->

      <div class="pt-4 pt-lg-0"></div>

      <div class="accordion" id="categories-list">
          <div class="accordion-item mb-4 pb-3">
              <h5 class="accordion-header" id="accordion-heading-1">
                  <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                      data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true"
                      aria-controls="accordion-filter-1">
                      Product Categories
                      <svg class="accordion-button__icon type2" viewbox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                          <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                              <path
                                  d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z">
                              </path>
                          </g>
                      </svg>
                  </button>
              </h5>
              <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
                  aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
                  <div class="accordion-body px-0 pb-0 pt-3">
                      <ul class="list list-inline mb-0">
                          @foreach ($categories as $category)
                              <li class="list-item">
                                  <a href="{{ $category->name }}" data-category_sort="{{ $category->name }}"
                                      class="menu-link py-1 category-sort {{ isset($query['category']) && $query['category'] == $category->name ? 'active' : '' }}">{{ $category->name }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </div>
              </div>
          </div><!-- /.accordion-item -->
      </div><!-- /.accordion-item -->


      <div class="accordion" id="color-filters">
          <div class="accordion-item mb-4 pb-3">
              <h5 class="accordion-header" id="accordion-heading-1">
                  <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                      data-bs-toggle="collapse" data-bs-target="#accordion-filter-2" aria-expanded="true"
                      aria-controls="accordion-filter-2">
                      Color
                      <svg class="accordion-button__icon type2" viewbox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                          <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                              <path
                                  d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z">
                              </path>
                          </g>
                      </svg>
                  </button>
              </h5>
              <div id="accordion-filter-2" class="accordion-collapse collapse show border-0"
                  aria-labelledby="accordion-heading-1" data-bs-parent="#color-filters">
                  <div class="accordion-body px-0 pb-0">
                      <div class="d-flex flex-wrap">
                          @foreach ($colors as $color)
                              <a href="" data-color="{{ $color->name }}"
                                  class="swatch-color js-filter {{ isset($query['color']) && $query['color'] == $color->name ? 'swatch_active' : '' }}"
                                  title="{{ $color->name }}" style="color: {{ $color->name }}"></a>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="size-filters">
          <div class="accordion-item mb-4 pb-3">
              <h5 class="accordion-header" id="accordion-heading-size">
                  <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button"
                      data-bs-toggle="collapse" data-bs-target="#accordion-filter-size" aria-expanded="true"
                      aria-controls="accordion-filter-size">
                      Sizes
                      <svg class="accordion-button__icon type2" viewbox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                          <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                              <path
                                  d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z">
                              </path>
                          </g>
                      </svg>
                  </button>
              </h5>
              <div id="accordion-filter-size" class="accordion-collapse collapse show border-0"
                  aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
                  <div class="accordion-body px-0 pb-0">
                      <div class="d-flex flex-wrap">
                          @foreach ($sizes as $size)
                              <a href="#" data-size="{{ $size->name }}"
                                  class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter
                                    {{ isset($query['size']) && $query['size'] == $size->name ? 'swatch_active' : '' }}
                                  ">{{ $size->name }}</a>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->
      <div>
          <button class="btn btn-primary" id="apply_filters">
              Apply Filter
          </button>
      </div>
  </div><!-- /.shop-sidebar -->
