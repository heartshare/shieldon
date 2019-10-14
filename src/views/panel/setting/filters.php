<?php defined('SHIELDON_VIEW') || exit('Life is short, why are you wasting time?');
/*
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use function Shieldon\Helper\_e;
use function Shieldon\Helper\mask_string;

?>
<div class="section-title bg-glass">
    <h2>Frequency</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="filters__frequency__enable" value="off" />
            <input type="checkbox" name="filters__frequency__enable" class="toggle-block" value="on" data-target="filters-frequency-section" <?php $this->checked('filters.frequency.enable', true); ?> />
            <span class="switch-left">ON</span>
            <span class="switch-right">OFF</span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="filters-frequency-section">
    <table class="setting-table">
        <tr>
            <td class="r1"></td>
            <td class="r2">
                <p>Don't worry about the human visitors, if they reach the limit and get banned, they can easily continue surfing your website by solving CAPTCHA.<br />The following image is an example.</p>
                <p><img src="https://shieldon-io.github.io/static/images/captcha_form.png"></p>
            </td>
        </tr>
        <tr>
            <td class="r1">Secondly Limit</td>
            <td class="r2">
                <input type="text" name="filters__frequency__config__quota_s" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.frequency.config.quota_s'); ?>"><br />
                <p>Page views per vistor per second.</p>
            </td>
        </tr>
        <tr>
            <td class="r1">Minutely Limit</td>
            <td class="r2">
                <input type="text" name="filters__frequency__config__quota_m" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.frequency.config.quota_m'); ?>"><br />
                <p>Page views per vistor per minute.</p>
            </td>
        </tr>
        <tr>
            <td class="r1">Hourly Limit</td>
            <td class="r2">
                <input type="text" name="filters__frequency__config__quota_h" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.frequency.config.quota_h'); ?>"><br />
                <p>Page views per vistor per hour.</p>
            </td>
        </tr>
        <tr>
            <td class="r1">Daily Limit</td>
            <td class="r2">
                <input type="text" name="filters__frequency__config__quota_d" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.frequency.config.quota_d'); ?>"><br />
                <p>Page views per vistor per day.</p>
            </td>
        </tr>
    </table>
</div>

<!-------------------------------------------------------------------------------------------------------------->
<div class="section-title bg-glass mt-3">
    <h2>Cookie</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="filters__cookie__enable" value="off" />
            <input type="checkbox" name="filters__cookie__enable" class="toggle-block" value="on" data-target="filters-cookie-section" <?php $this->checked('filters.cookie.enable', true); ?> />
            <span class="switch-left">ON</span>
            <span class="switch-right">OFF</span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="filters-cookie-section">
    <table class="setting-table">
        <tr>
            <td class="r1"></td>
            <td class="r2">
                <p>
                    Check cookie generated by JavaScript.
                </p>

                <code class="p-3 border bg-light d-inline-block text-dark">
                    <span class="text-muted">// You have to inject this variable to the template to make it work.</span><br />
                    $jsCode = $firewall->getShieldon()->outputJsSnippet();
                </code><br /><br />
            </td>
        </tr>
        <tr>
            <td class="r1">Quota</td>
            <td class="r2">
                <input type="text" name="filters__cookie__config__quota" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.cookie.config.quota'); ?>"><br />
                <p>A visitor reached this limit will get banned temporarily.</p>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="filters-cookie-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Cookie Name</td>
            <td class="r2">
                <input type="text" name="filters__cookie__config__cookie_name" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.cookie.config.cookie_name'); ?>"><br />
                <p>English characters only.</p>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="filters-cookie-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Cookie Value</td>
            <td class="r2">
                <input type="text" name="filters__cookie__config__cookie_value" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.cookie.config.cookie_value'); ?>"><br />
                <p>English characters only.</p>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="filters-cookie-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Cookie Domain</td>
            <td class="r2">
                <input type="text" name="filters__cookie__config__cookie_domain" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.cookie.config.cookie_domain'); ?>"><br />
                <p>Just leave it blank.</p>
            </td>
        </tr>
    </table>
</div>

<!-------------------------------------------------------------------------------------------------------------->
<div class="section-title bg-glass mt-3">
    <h2>Session</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="filters__session__enable" value="off" />
            <input type="checkbox" name="filters__session__enable" class="toggle-block" value="on" data-target="filters-session-section" <?php $this->checked('filters.session.enable', true); ?> />
            <span class="switch-left">ON</span>
            <span class="switch-right">OFF</span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="filters-session-section">
    <table class="setting-table">
        <tr>
            <td class="r1"></td>
            <td class="r2">
                <p>
                    Detect multiple sessions created by the same visitor.
                </p>
            </td>
        </tr>
        <tr>
            <td class="r1">Quota</td>
            <td class="r2">
                <input type="text" name="filters__session__config__quota" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.session.config.quota'); ?>"><br />
                <p>A visitor reached this limit will get banned temporarily.</p>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="filters-session-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Buffered Time</td>
            <td class="r2">
                <input type="text" name="filters__session__config__time_buffer" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.session.config.time_buffer'); ?>"><br />
                <p>Start using this filter after n seconds after the first time visiting your website.</p>
            </td>
        </tr>
    </table>
</div>

<!-------------------------------------------------------------------------------------------------------------->
<div class="section-title bg-glass mt-3">
    <h2>Referer</h2>
    <div class="toggle-container">
        <label class="rocker rocker-md">
            <input type="hidden" name="filters__referer__enable" value="off" />
            <input type="checkbox" name="filters__referer__enable" class="toggle-block" value="on" data-target="filters-referer-section" <?php $this->checked('filters.referer.enable', true); ?> />
            <span class="switch-left">ON</span>
            <span class="switch-right">OFF</span>
        </label>
    </div>
</div>
<div class="section-body my-0" data-parent="filters-referer-section">
    <table class="setting-table">
        <tr>
            <td class="r1"></td>
            <td class="r2">
                <p>
                    Check HTTP referrer information.
                </p>
            </td>
        </tr>
        <tr>
            <td class="r1">Quota</td>
            <td class="r2">
                <input type="text" name="filters__session__config__quota" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.referer.config.quota'); ?>"><br />
                <p>A visitor reached this limit will get banned temporarily.</p>
            </td>
        </tr>
    </table>
</div>
<div class="section-body my-0" data-parent="filters-referer-section">
    <table class="setting-table">
        <tr>
            <td class="r1">Buffered Time</td>
            <td class="r2">
                <input type="text" name="filters__referer__config__time_buffer" class="form-control form-control-sm col-sm-3" value="<?php $this->_('filters.referer.config.time_buffer'); ?>"><br />
                <p>Start using this filter after n seconds after the first time visiting your website.</p>
            </td>
        </tr>
    </table>
</div>
