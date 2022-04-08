<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CCStepTWO;
use App\Models\CreditCard;
use DB;
use App\Exports\CreditExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class CCStepTWOController extends Controller
{
    public function show()
    {
        $CreditCards = CCStepTWO::paginate(5);
        // $CreditCards = DB::table('credit_cards')
        // ->join('c_c_step_t_w_o_s', 'credit_cards.id', '=', 'c_c_step_t_w_o_s.credit_id')
        // ->select('credit_cards.*', 'c_c_step_t_w_o_s.*', 'credit_cards.name')
        // ->get();

        // $CreditCards->increment('credit_id');

        return view('creditCard.show', compact('CreditCards'));
    }

    public function indexstepone()
    {
        return view('creditCard.create-step-one');
    }

    public function createStepOne(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.create-step-one', compact('creditCard'));
    }

    public function creditexport()
    {
        return Excel::download(new CreditExport(), 'credit.xlsx');
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            // 'img_name' => 'required',
            'salary' => 'required',
        ]);

        if (empty($request->session()->get('creditCard'))) {
            $creditCard = new CCStepTWO();
            $creditCard->fill($validatedData);
            $request->session()->put('creditCard', $creditCard);
        } else {
            $creditCard = $request->session()->get('creditCard');
            $creditCard->fill($validatedData);
            $request->session()->put('creditCard', $creditCard);
        }

        return redirect()->route('creditCard.create.step.two');
    }

    public function moneyback(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.moneyback', compact('creditCard'));
    }

    public function postmoneyback(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function indiGo(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.indigo', compact('creditCard'));
    }
    public function postIndiGo(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function indianOil(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.indianOil', compact('creditCard'));
    }
    public function postindianOil(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function freedom(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.freedom', compact('creditCard'));
    }
    public function postFreedom(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function auraEdge(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.auraEdge', compact('creditCard'));
    }
    public function postAuraEdge(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function altura(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.altura', compact('creditCard'));
    }
    public function postAltura(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function millenia(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.millenia', compact('creditCard'));
    }
    public function postMillenia(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function alturaPlus(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.alturaPlus', compact('creditCard'));
    }
    public function postAlturaPlus(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function regalia(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.regalia', compact('creditCard'));
    }
    public function postRegalia(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function diners(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.dinersBlack', compact('creditCard'));
    }
    public function postDiners(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    // // Infinia
    public function infinia(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.infinia', compact('creditCard'));
    }
    public function postInfinia(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

    public function zenith(Request $request)
    {
        $creditCard = $request->session()->get('creditCard');

        return view('creditCard.zenith', compact('creditCard'));
    }
    public function postZenith(Request $request)
    {
        $creditCard = new CCStepTWO();
        $creditCard->name = $request->name;
        $creditCard->mobile = $request->mobile;
        $creditCard->email = $request->email;
        $creditCard->dob = $request->dob;
        $creditCard->pan = $request->pan;
        $creditCard->income_source = $request->income_source;
        $creditCard->company_name = $request->company_name;
        $creditCard->loan = $request->loan;
        // $creditCard->salary = $request->salary;
        $creditCard->img_name = $request->img_name;
        $creditCard->city = $request->city;
        $creditCard->pincode = $request->pincode;
        $creditCard->homeaddress = $request->homeaddress;
        $creditCard->homepincode = $request->homepincode;

        //pan
        $pan_file = $request->pan_file_image;
        if ($pan_file !== null) {
            $file_name_pan = time() . '.' . $pan_file->getClientOriginalExtension();
            $request->pan_file_image->move('creditCard_upload/panCard', $file_name_pan);

            $creditCard->pan_file_image = $file_name_pan;
        }

        // aadhaar
        $aadhaar_file = $request->aadhaar;
        if ($aadhaar_file !== null) {
            $file_name_aadhaar = time() . '.' . $aadhaar_file->getClientOriginalExtension();
            $request->aadhaar->move('creditCard_upload/aadhaar', $file_name_aadhaar);

            $creditCard->aadhaar = $file_name_aadhaar;
        }

        //income_proof
        $income_proof_file = $request->income_proof;
        if ($income_proof_file !== null) {
            $file_name_income_proof = time() . '.' . $income_proof_file->getClientOriginalExtension();
            $request->income_proof->move('creditCard_upload/income_proof', $file_name_income_proof);

            $creditCard->income_proof = $file_name_income_proof;
        }
        //photo
        $photo_file = $request->photo;
        if ($photo_file !== null) {
            $file_name_photo = time() . '.' . $photo_file->getClientOriginalExtension();
            $request->photo->move('creditCard_upload/photo', $file_name_photo);

            $creditCard->photo = $file_name_photo;
        }

        //statment
        $statment_file = $request->statment;
        if ($statment_file !== null) {
            $file_name_statment = time() . '.' . $statment_file->getClientOriginalExtension();
            $request->statment->move('creditCard_upload/statment', $file_name_statment);
            $creditCard->statment = $file_name_statment;
        }

        $creditCard->save();

        return response()->json([
            'status' => 200,
            'message' => 'Thank, you Application has been sucessfully submitted our, representative contact you shortly!!',
        ]);
    }

         // pan
         public function download(Request $request ,$file)
         {
             return response()->download(public_path('creditCard_upload/panCard/'.$file));
         }
         // photo
         public function downloadphoto(Request $request ,$file)
         {
             return response()->download(public_path('creditCard_upload/photo/'.$file));
         }
        // statement
         public function downloadstatement(Request $request ,$file)
         {
             return response()->download(public_path('creditCard_upload/statment/'.$file));
         }
             // income
         public function downloadincome(Request $request ,$file)
         {
             return response()->download(public_path('creditCard_upload/income_proof/'.$file));
         }
             // aaddhar
         public function downloadaadhar(Request $request ,$file)
         {
             return response()->download(public_path('creditCard_upload/aadhaar/'.$file));
         }

}
