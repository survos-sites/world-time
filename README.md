# World Time PWA

A simple Symfony app that demonstrates how to create a PWA using spomky-labs/phpwa


# Create a PWA

These should move to the phpwa README

```bash
symfony new epoch-pwa --webapp && cd epoch-pwa
composer config extra.symfony.allow-contrib true
composer req symfony/asset-mapper symfony/stimulus-bundle

bin/console importmap:require bootstrap
echo "import 'bootstrap/dist/css/bootstrap.min.css'" >> assets/app.js
bin/console importmap:require bootstrap-icons/font/bootstrap-icons.min.css
echo "import 'bootstrap-icons/font/bootstrap-icons.min.css'" >> assets/app.js

bin/console make:controller AppController
sed -i "s|Route('/app'|Route('/'|" src/Controller/AppController.php
sed -i "s|'app_app'|'app_homepage'|" src/Controller/AppController.php

cat > templates/app/index.html.twig <<END
{% extends 'base.html.twig' %}
{% block body %}
<div class="container">
<span class="bi bi-clock h1"></span>
<div {{ stimulus_controller('epoch') }}></div>

        <div class="text text-muted">
            created from {{ _self }} on {{ 'now'|date('U') }}
        </div>
    <a class="btn btn-primary">
        <span class="bi bi-download"></span>
        Install as PWA</a>
    </div>
{% endblock %}
END

cat > assets/controllers/epoch_controller.js <<END
import { Controller } from '@hotwired/stimulus';
export default class extends Controller {
    connect() {
        this.element.textContent = "epoch time is now " +  Date.now();
    }
}
END

composer config minimum-stability dev
composer require --dev spomky-labs/phpwa

cat > config/packages/pwa.yaml <<END
# config/packages/pwa.yaml
pwa:
#    image_processor: 'pwa.image_processor.imagick'
    manifest:
        enabled: true
        background_color: "#c026d3"
        theme_color: "#c026d3"
        name: 'Epoch Time'
        short_name: 'ETime!'
        description: 'A trivial app that displays the current epoch time'
        orientation: "any"
        display: "standalone"
        scope: "/"
        display_override: ['fullscreen', 'minimal-ui', 'window-controls-overlay']
        id: "/"
        start_url: "./"
        icons:
            - src: "clock.1024x1024.png"
              sizes: "any"
        screenshots:
            - "images/screenshot1.png"
            - "images/screenshot2.png"
        categories: []
        shortcuts: []
        edge_side_panel:
            preferred_width: 280
        widgets: []
    serviceworker:
        enabled: true
        src: "sw.js"
        skip_waiting: true
        workbox:
            warm_cache_urls:
                - 'app_homepage'
            page_fallback: 'app_homepage'
END

symfony server:start -d
symfony open:local

```
