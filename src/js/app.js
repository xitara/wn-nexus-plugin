// import 'alpinejs';
// import Glide from '@glidejs/glide';
// import GLightbox from 'glightbox';
import Mark from 'mark.js';
// import { qs, qsa, $on, $delegate } from './utils';
import { qs, $on } from './utils';
import '../scss/styles.scss';

$on(document, 'DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const highlight = urlParams.get('highlight');

    /**
     * highlight search results
     * active with 'highlight=[TEXT]' as query-paramter
     */
    if (highlight !== null) {
        const instance = new Mark('main');
        instance.mark(highlight, {
            separateWordSearch: false,
        });

        /**
         * scroll first element in center of viewport
         */
        qs('mark[data-markjs]').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            inline: 'center',
        });
    }
});
