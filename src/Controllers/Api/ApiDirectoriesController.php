<?php

namespace Svr\Directories\Controllers\Api;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Svr\Core\Enums\AnimalRegisterStatusEnum;
use Svr\Core\Enums\ApplicationAnimalStatusEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Exceptions\CustomException;
use Svr\Core\Resources\SvrApiResponseResource;
use Svr\Data\Models\DataAnimals;
use Svr\Data\Models\DataAnimalsCodes;
use Svr\Data\Models\DataApplications;
use Svr\Data\Models\DataCompaniesLocations;
use Svr\Data\Models\DataCompaniesObjects;
use Svr\Data\Resources\SvrApiAnimalsDataDictionaryResource;
use Svr\Data\Resources\SvrApiAnimalsDataResource;
use Svr\Data\Resources\SvrApiAnimalsListMarkResource;
use Svr\Data\Resources\SvrApiAnimalsListResource;
use Svr\Data\Resources\SvrApiBreedsListResource;
use Svr\Data\Resources\SvrApiCountriesListResource;
use Svr\Data\Resources\SvrApiSpeciesListResource;
use Svr\Directories\Models\DirectoryAnimalsBreeds;
use Svr\Directories\Models\DirectoryAnimalsSpecies;
use Svr\Directories\Models\DirectoryCountries;
use Svr\Directories\Models\DirectoryCountriesRegion;
use Svr\Directories\Models\DirectoryCountriesRegionsDistrict;
use Svr\Directories\Models\DirectoryGenders;
use Svr\Directories\Models\DirectoryKeepingPurposes;
use Svr\Directories\Models\DirectoryKeepingTypes;
use Svr\Directories\Models\DirectoryMarkStatuses;
use Svr\Directories\Models\DirectoryMarkToolTypes;
use Svr\Directories\Models\DirectoryMarkTypes;
use Svr\Directories\Models\DirectoryOutBasises;
use Svr\Directories\Models\DirectoryOutTypes;
use Svr\Directories\Models\DirectoryToolsLocations;

class ApiDirectoriesController extends Controller
{
    /**
     * Справочники видов животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesSpecies(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'specie_name' => ['string'],
        ],
        [
            'specie_name' => trans('svr-core-lang::validation')
        ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $model = new DirectoryAnimalsSpecies();
        $items_list = $model->speciesList($user['pagination_per_page'], $user['pagination_cur_page'], $valid_data);
        $items_count = $model->species_count;

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены виды животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'species_list' =>collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiSpeciesListResource::class,
            'response_resource_dictionary' => false,
            'pagination' => [
                'total_records' => $items_count,
                'cur_page' => $user['pagination_cur_page'],
                'per_page' => $user['pagination_per_page']
            ],
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники пород животных
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesBreeds(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(),
            [
                'specie_id'     => ['int', Rule::exists(DirectoryAnimalsSpecies::getTableName(), 'specie_id')],
                'breed_name'    => ['string'],
            ],
            [
                'specie_id'     => trans('svr-core-lang::validation'),
                'breed_name'    => trans('svr-core-lang::validation')
            ]
        );

        $valid_data = $validator->validated();

        $user = auth()->user();

        $model = new DirectoryAnimalsBreeds();
        $items_list = $model->breedsList($user['pagination_per_page'], $user['pagination_cur_page'], $valid_data);
        $items_count = $model->breeds_count;

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены породы животных');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'breeds_list' =>collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiBreedsListResource::class,
            'response_resource_dictionary' => false,
            'pagination' => [
                'total_records' => $items_count,
                'cur_page' => $user['pagination_cur_page'],
                'per_page' => $user['pagination_per_page']
            ],
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }

    /**
     * Справочники стран
     * @param Request $request
     * @return JsonResponse|SvrApiResponseResource
     * @throws Exception
     */
    public function directoriesCountries(Request $request): SvrApiResponseResource|JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'country_name' => ['string'],
        ],
            [
                'country_name' => trans('svr-core-lang::validation')
            ]);

        $valid_data = $validator->validated();

        $user = auth()->user();

        $model = new DirectoryCountries();
        $items_list = $model->countriesList($user['pagination_per_page'], $user['pagination_cur_page'], $valid_data);
        $items_count = $model->countries_count;

        if(!$items_list OR count($items_list) < 1)
        {
            throw new CustomException('Не найдены страны');
        }

        //складываем все в коллекцию
        $data = collect([
            'user_id' => $user['user_id'],
            'countries_list' =>collect($items_list),
            'status' => true,
            'message' => '',
            'response_resource_data' => SvrApiCountriesListResource::class,
            'response_resource_dictionary' => false,
            'pagination' => [
                'total_records' => $items_count,
                'cur_page' => $user['pagination_cur_page'],
                'per_page' => $user['pagination_per_page']
            ],
        ]);

        //отдаем ресурс с ответом
        return new SvrApiResponseResource($data);
    }


}