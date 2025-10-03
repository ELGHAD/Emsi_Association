<!-- Loading Spinner Component -->
<div class="spinner-container">
    <!-- Default Spinner -->
    <div class="spinner-wrapper default-spinner d-none">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
        <p class="spinner-text mt-2">Chargement...</p>
    </div>

    <!-- Full Page Overlay Spinner -->
    <div class="spinner-overlay d-none">
        <div class="spinner-wrapper">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Chargement...</span>
            </div>
            <p class="spinner-text text-light mt-2">Chargement...</p>
        </div>
    </div>
</div>

<style>
    .spinner-container {
        position: relative;
    }

    .spinner-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }

    .spinner-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .spinner-text {
        margin: 0;
        font-size: 0.875rem;
        color: inherit;
    }

    /* Custom spinner sizes */
    .spinner-sm .spinner-border {
        width: 1rem;
        height: 1rem;
    }

    .spinner-lg .spinner-border {
        width: 3rem;
        height: 3rem;
    }
</style>

<script>
    // Spinner management functions
    const SpinnerManager = {
        // Show default spinner in a specific container
        showSpinner: function(containerId = null) {
            const container = containerId ? document.getElementById(containerId) : document;
            const spinner = container.querySelector('.default-spinner');
            if (spinner) {
                spinner.classList.remove('d-none');
            }
        },

        // Hide default spinner in a specific container
        hideSpinner: function(containerId = null) {
            const container = containerId ? document.getElementById(containerId) : document;
            const spinner = container.querySelector('.default-spinner');
            if (spinner) {
                spinner.classList.add('d-none');
            }
        },

        // Show full page overlay spinner
        showOverlaySpinner: function() {
            const overlay = document.querySelector('.spinner-overlay');
            if (overlay) {
                overlay.classList.remove('d-none');
                document.body.style.overflow = 'hidden';
            }
        },

        // Hide full page overlay spinner
        hideOverlaySpinner: function() {
            const overlay = document.querySelector('.spinner-overlay');
            if (overlay) {
                overlay.classList.add('d-none');
                document.body.style.overflow = '';
            }
        }
    };
</script> 