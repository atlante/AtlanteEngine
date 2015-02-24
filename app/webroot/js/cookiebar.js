/*
 * Copyright (C) 2014 agentcobra <agentcobra@users.noreply.github.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

(function($) {
    $('#footer').on('click', '.opt-in', function(e) {
        e.preventDefault();
        $.cookie('cookiebar', true, {expires: 30 * 12});
        $('#cookiebar').slideUp();
    });
    if ($.cookie('cookiebar') === undefined) {
        $('#footer').append('<div class="cookiebar navbar-fixed-bottom alert alert-info" id="cookiebar" role="alert"><p class="text-info">Ce site utilise Google Analytics. En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de Cookies pour réaliser des statistiques de visites anonymes. <a class="alert-link" href="https://www.google.com/policies/technologies/cookies/" target="_blank">En savoir plus</a> <span class="btn-group"><a class="btn btn-info" href="http://dnt.mozilla.org/" target="_blank">En savoir plus sur "Do Not Track"</a><span class="btn btn-success opt-in">OK</span></span></p></div>');
    } else {
        $('#cookiebar').remove();
    }
})(jQuery);
