<div class="md:flex block items-center justify-between mb-6 mt-[2rem]  ">
    <div class="my-auto">
        <h5 class="page-title text-2xl font-medium text-defaulttextcolor mb-0">Profile</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-lg"> <a class="flex items-center text-white hover:text-white" href="/dashboard"> Dashboard
                    </a> </li>
                <a class="text-lg text-[#F47500] px-2" href="#slide4">❯❯</a>
                <li class="text-lg"> <a class="flex items-center text-[#F47500]" href="/dashboard/profile">Profile
                    </a> </li>
            </ol>
        </nav>
    </div>

    <div class="flex xl:my-auto right-content align-items-center">
        <div class="pe-1 xl:mb-0">
            <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                <i class="mdi mdi-filter-variant"></i>
            </button>
        </div>
        <div class="pe-1 xl:mb-0">
            <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-star"></i>
            </button>
        </div>
        <div class="pe-1 xl:mb-0">
            <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-refresh"></i>
            </button>
        </div>
        <div class="xl:mb-0">
            <div class="hs-dropdown ti-dropdown">
                <p class=" text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="currentDate"></span> <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                </p>

            </div>
        </div>

        <script>
            function formatDate(date) {
                const day = String(date.getDate()).padStart(2, '0');
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const year = date.getFullYear();
                return `${day}-${month}-${year}`;
            }

            document.addEventListener('DOMContentLoaded', (event) => {
                const currentDateElement = document.getElementById('currentDate');
                const today = new Date();
                currentDateElement.textContent = formatDate(today);
            });
        </script>

    </div>
</div>