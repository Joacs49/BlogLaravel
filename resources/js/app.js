import './bootstrap';
import './posts-comments.js';
import { pagination } from './pagination-blogList.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.data('pagination', pagination)
Alpine.start();
