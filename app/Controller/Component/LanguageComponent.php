<?php
/**
 * Language Component
 * 
 * Manages the locale of a CakePHP v.2.x application using a parameter in the URL.
 * 
 * Licensed under The BSD 3 Clause License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 * 
 * @copyright Copyright (c) Etienne Lamoureux (http://www.crystalgorithm.com)
 * @link https://github.com/EtienneLamoureux/CakePHP-URL-parameter-language
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
 
App::uses('Component', 'Controller');

/**
 * Language Component
 * 
 * Manages the locale of the application using a parameter in the URL.
 * Uses a cookie named 'locale'.
 * 
 * @see http://www.crystalgorithm.com/posts/
 */
class LanguageComponent extends Component
{
	public $components = array(
		'Cookie',
		'Session'
	);
	
	/**
	 * Must be set in the AppController when including this component
	 * Keys are user-defined, they represent the language code in your URL
	 * Values are ISO 639-2 locale code
	 * 
	 * @see http://www.loc.gov/standards/iso639-2/php/code_list.php
	 * @example public $components = array('Language' => array('supportedLanguages' => array('en' => 'eng', 'fr' => 'fra')));
	 */
	public $supportedLanguages;
	
	/**
	 * Sets the language and locale for your application
	 * Must be called in AppController::beforeFilter
	 * 
	 * @example $this->Language->set($this->params['language']);
	 */
	public function set($language = null)
	{
		$this->setLocaleFromLanguage($language);
		$this->setLocaleForI18nAndTranslateBehavior();
	}
	
	/**
	 * Returns the current ISO 639-2 locale code of your application
	 */
	public function getLocale()
	{
		return $this->Session->read('Config.language');
	}
	
	/**
	 * Returns the current user-defined language code of your application
	 * Can be used in AppController::beforeRender
	 * 
	 * @example $this->set('language', $this->Language->getLanguage());
	 */
	public function getLanguage()
	{
		return $this->convertLocaleToLanguage($this->getLocale());
	}
	
	private function convertLocaleToLanguage($locale)
	{
		return array_search($locale, $this->supportedLanguages);
	}
	
	private function convertLanguageToLocale($language)
	{
		return $this->supportedLanguages[$language];
	}
	
	private function setLocaleFromLanguage($language)
	{
		if ($this->localeIsOnlySetInCookie())
		{
			$this->setLocaleForCakePHP($this->Cookie->read('locale'));
		} 
		else if ($this->languageIsInURL($language))
		{
			//DO NOT MERGE with else if. Necessary for initial language set.
			if ($this->languageChanged($language))
			{
				$locale = $this->convertLanguageToLocale($language);
				$this->setLocale($locale);
			}
		}
		else
		{
			$locales = array_values($this->supportedLanguages);
			$this->setLocale($locales[0]);
		}
	}

	private function setLocale($locale)
	{
		$this->setLocaleForCakePHP($locale);
		$this->setCookie($locale);
	}
	
	private function localeIsOnlySetInCookie()
	{
		return $this->Cookie->read('locale') && !$this->Session->check('Config.language');
	}
	
	private function setLocaleForCakePHP($locale)
	{
		$this->Session->write('Config.languageCode', $this->convertLocaleToLanguage($locale));
		$this->Session->write('Config.language', $locale);
		setlocale(LC_ALL, $locale);
	}
	
	private function setCookie($locale, $duration = '20 days')
	{
		$this->Cookie->write('locale', $locale, false, $duration);
	}
	
	private function setLocaleForI18nAndTranslateBehavior()
	{
		if ($this->Session->check('Config.language'))
		{
			Configure::write('Config.language', $this->Session->read('Config.language'));
			setlocale(LC_TIME, $this->Session->read('Config.language'));
		}
	}
	
	private function languageIsInURL($language)
	{
		return isset($language) && $this->languageIsSupported($language);
	}
	
	private function languageIsSupported($language)
	{
		return array_key_exists($language, $this->supportedLanguages);
	}
	
	private function languageChanged($language)
	{
		return $this->convertLanguageToLocale($language) != $this->Session->read('Config.language');
	}
}