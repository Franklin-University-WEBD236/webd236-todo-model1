class Logger {
  private static $instance;
  private $filename;
  private $level;

  const DEBUG = 0;
  const INFO = 1;
  const WARN = 2;
  const ERROR = 3;

  private function __construct($level=self::DEBUG, $filename='debug.log') {
    // log everything
    $this -> level = $level;
    $this -> filename = $filename;
  }

  public static function instance($level=self::DEBUG, $filename=‘debug.log) {
      if (!isset(self::$instance)) {
          self::$instance = new Logger($this->level, $this->filename);
      }
      return self::$instance;
  }

    public function debug($message) {
        return $this -> log(self::DEBUG, $message);
    }
