### dep injection with interface

```php (path="app/Interfaces/ReportServiceInterface.php")
namespace App\Interfaces;

interface ReportServiceInterface
{
    public function getTransactionReport(int $projectID = NULL);
}
```

```php (path="app/Services/ReportService.php")
use App\Interfaces\ReportServiceInterface;

class ReportService implements ReportServiceInterface
{
    public function getTransactionReport(int $projectID = NULL);
    {
        //...some code
    }
}
```

```php (path="app/Services/YearlyReportService.php")
use App\Interfaces\ReportServiceInterface;

class YearlyReportService implements ReportServiceInterface
{
    private $year;

    public function __construct(int $year = NULL)
    {
        $this->year = $year;
    }

    public function getTransactionReport(int $projectID = NULL)
    {
        //...some code
    }
}
```

```php (path="app/Http/Controllers/ClientReportController.php")
use App\Interfaces\ReportServiceInterface;

class ClientReportController extends Controller
{
    private $reportService;

    public function __construct(ReportServiceInterface $reportService)
    {
        $this->reportService = $reportService;
    }

    public function index(Request $request)
    {
        $entries =
            $this
            ->reportService
            ->getTransactionReport($request->input('project'))
        // some code
    }
}
```

```php (path="app/Providers/AppServiceProvider.php")
use App\Interfaces\ReportServiceInterface;
use App\Services\ReportService;
use App\Services\YearlyReportService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        if(app()->environment('local')) {
            $this->app->bind(ReportServiceInterface::class, function () {
                return new ReportService();
            });
        } else {
            $this->app->bind(ReportServiceInterface::class, function () {
                return new YearlyReportService();
            });
        }
    }
}
```
