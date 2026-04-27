<?php

/**
 * Registers shortcodes for embedding nuLiga tables and schedules in posts/pages.
 *
 * Usage examples:
 *
 * League table (with optional upcoming/past games):
 *   [nuliga_tab url="https://..." verein="My Club"]
 *
 * Class schedule:
 *   [nuliga_plan url="https://..." verein="My Club" alle="1"]
 *
 * Full club schedule:
 *   [nuliga_planverein club="12345" verein="My Club"]
 *
 * @link       https://github.com/mjasny/
 * @since      1.2.0
 *
 * @package    Nuliga
 * @subpackage Nuliga/includes
 */

/**
 * Shortcode handler class for nuLiga widgets.
 *
 * @since      1.2.0
 * @package    Nuliga
 * @subpackage Nuliga/includes
 * @author     mjasny <matthias@jasny.com.de>
 */
class Nuliga_Shortcodes {

	/**
	 * Renders the [nuliga_tab] shortcode.
	 *
	 * Outputs a <div class="srsTab"> placeholder that nuliga-public.js fills
	 * with the league table (and optionally upcoming/past games).
	 *
	 * Supported attributes:
	 *   url, title, verein, minitab, auchspiele, keineak, auchak, keineex,
	 *   tabellenspalten, tabellenkopf, tabellenformat, class
	 *
	 * @since  1.2.0
	 * @param  array $atts Shortcode attributes.
	 * @return string      HTML output.
	 */
	public function shortcode_tab( $atts ) {
		$atts = shortcode_atts(
			array(
				'url'             => '',
				'title'           => '',
				'verein'          => '',
				'minitab'         => '',
				'auchspiele'      => '',
				'keineak'         => '',
				'auchak'          => '',
				'keineex'         => '',
				'tabellenspalten' => '',
				'tabellenkopf'    => '',
				'tabellenformat'  => '',
				'class'           => '',
			),
			$atts,
			'nuliga_tab'
		);

		$attr_map = array(
			'url'             => 'srsURL',
			'title'           => 'srsTitle',
			'verein'          => 'srsVerein',
			'minitab'         => 'srsMinitab',
			'auchspiele'      => 'srsAuchSpiele',
			'keineak'         => 'srsKeineAK',
			'auchak'          => 'srsAuchAK',
			'keineex'         => 'srsKeineEx',
			'tabellenspalten' => 'srsTabellenSpalten',
			'tabellenkopf'    => 'srsTabellenKopf',
			'tabellenformat'  => 'srsTabellenFormat',
			'class'           => 'srsClass',
		);

		return '<div class="srsTab"' . $this->build_attrs( $atts, $attr_map ) . '></div>';
	}

	/**
	 * Renders the [nuliga_plan] shortcode.
	 *
	 * Outputs a <div class="srsPlan"> placeholder for a class-specific schedule.
	 *
	 * Supported attributes:
	 *   url, title, verein, alle, heimgast, von, bis, aktuell, neuevorne,
	 *   nurhalle, ohnehalle, maxzeilen, class, tabellenspalten, tabellenkopf,
	 *   tabellenformat
	 *
	 * @since  1.2.0
	 * @param  array $atts Shortcode attributes.
	 * @return string      HTML output.
	 */
	public function shortcode_plan( $atts ) {
		$atts = shortcode_atts(
			array(
				'url'             => '',
				'title'           => '',
				'verein'          => '',
				'alle'            => '',
				'heimgast'        => '',
				'von'             => '',
				'bis'             => '',
				'aktuell'         => '',
				'neuevorne'       => '',
				'nurhalle'        => '',
				'ohnehalle'       => '',
				'maxzeilen'       => '',
				'class'           => '',
				'tabellenspalten' => '',
				'tabellenkopf'    => '',
				'tabellenformat'  => '',
			),
			$atts,
			'nuliga_plan'
		);

		$attr_map = array(
			'url'             => 'srsURL',
			'title'           => 'srsTitle',
			'verein'          => 'srsVerein',
			'alle'            => 'srsAlle',
			'heimgast'        => 'srsHeimGast',
			'von'             => 'srsVon',
			'bis'             => 'srsBis',
			'aktuell'         => 'srsAktuell',
			'neuevorne'       => 'srsNeueVorne',
			'nurhalle'        => 'srsNurHalle',
			'ohnehalle'       => 'srsOhneHalle',
			'maxzeilen'       => 'srsMaxZeilen',
			'class'           => 'srsClass',
			'tabellenspalten' => 'srsTabellenSpalten',
			'tabellenkopf'    => 'srsTabellenKopf',
			'tabellenformat'  => 'srsTabellenFormat',
		);

		return '<div class="srsPlan"' . $this->build_attrs( $atts, $attr_map ) . '></div>';
	}

	/**
	 * Renders the [nuliga_planverein] shortcode.
	 *
	 * Outputs a <div class="srsPlanVerein"> placeholder for a full club schedule.
	 *
	 * Supported attributes:
	 *   club, verband, sportart, title, verein, alle, heimgast, von, bis,
	 *   neuevorne, nurhalle, ohnehalle, maxzeilen, class, tabellenspalten,
	 *   tabellenkopf, tabellenformat
	 *
	 * @since  1.2.0
	 * @param  array $atts Shortcode attributes.
	 * @return string      HTML output.
	 */
	public function shortcode_planverein( $atts ) {
		$atts = shortcode_atts(
			array(
				'club'            => '',
				'verband'         => '',
				'sportart'        => '',
				'title'           => '',
				'verein'          => '',
				'alle'            => '',
				'heimgast'        => '',
				'von'             => '',
				'bis'             => '',
				'neuevorne'       => '',
				'nurhalle'        => '',
				'ohnehalle'       => '',
				'maxzeilen'       => '',
				'class'           => '',
				'tabellenspalten' => '',
				'tabellenkopf'    => '',
				'tabellenformat'  => '',
			),
			$atts,
			'nuliga_planverein'
		);

		$attr_map = array(
			'club'            => 'srsClub',
			'verband'         => 'srsVerband',
			'sportart'        => 'srsSportart',
			'title'           => 'srsTitle',
			'verein'          => 'srsVerein',
			'alle'            => 'srsAlle',
			'heimgast'        => 'srsHeimGast',
			'von'             => 'srsVon',
			'bis'             => 'srsBis',
			'neuevorne'       => 'srsNeueVorne',
			'nurhalle'        => 'srsNurHalle',
			'ohnehalle'       => 'srsOhneHalle',
			'maxzeilen'       => 'srsMaxZeilen',
			'class'           => 'srsClass',
			'tabellenspalten' => 'srsTabellenSpalten',
			'tabellenkopf'    => 'srsTabellenKopf',
			'tabellenformat'  => 'srsTabellenFormat',
		);

		return '<div class="srsPlanVerein"' . $this->build_attrs( $atts, $attr_map ) . '></div>';
	}

	/**
	 * Builds an HTML attribute string from shortcode attributes.
	 *
	 * Only attributes with non-empty values are included.
	 *
	 * @since  1.2.0
	 * @param  array $atts     Shortcode attribute key => value pairs.
	 * @param  array $attr_map Map of shortcode attribute names to HTML attribute names.
	 * @return string          HTML attribute string (leading space included).
	 */
	private function build_attrs( $atts, $attr_map ) {
		$html = '';
		foreach ( $attr_map as $sc_key => $html_attr ) {
			if ( isset( $atts[ $sc_key ] ) && '' !== $atts[ $sc_key ] ) {
				$html .= ' ' . $html_attr . '="' . esc_attr( $atts[ $sc_key ] ) . '"';
			}
		}
		return $html;
	}
}
