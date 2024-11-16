<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller {
    public function index() {
        $trendingNotice = News::where("is_trending", "=", "1")->first();

        $salaryCampaign = News::where("salary_campaign", "=", "1")->get();

        return view("home", [
            "salaryCampaign" => $salaryCampaign,
            "trendingNotice" => $trendingNotice
        ]);
    }

    public function virtualCard() {
        return view("virtual-card");
    }

    public function contact() {
        return view("contact");
    }

    public function becomeAMember() {
        return view("become-a-member");
    }

    public function sendEmail(Request $request) {
        $rules = [
            "name" => "required",
            "maritalStatus" => "required",
            "birthdate" => "required",
            "naturality" => "required",
            "rg" => "required",
            "cpf" => "required",
            "phone" => "required",
            "email" => "required|email",
            "address" => "required",
            "name" => "required",
            "number" => "required",
            "complement" => "required",
            "neighborhood" => "required",
            "city" => "required",
            "state" => "required",
            "workplace" => "required",
            "file" => "required|file|mimes:pdf,doc,docx,jpg,png|max:2048",
            "institution" => "required",
            "institucionCity" => "required"
        ];

        $messages = [
            "name.required" => "O campo Nome é obrigatório.",
            "maritalStatus.required" => "O campo Estado Civil é obrigatório.",
            "birthdate.required" => "O campo Data de Nascimento é obrigatório.",
            "naturality.required" => "O campo Naturalidade é obrigatório.",
            "rg.required" => "O campo RG é obrigatório.",
            "cpf.required" => "O campo CPF é obrigatório.",
            "phone.required" => "O campo Telefone é obrigatório.",
            "email.required" => "O campo E-mail é obrigatório.",
            "email.email" => "Por favor, insira um endereço de e-mail válido.",
            "address.required" => "O campo Endereço é obrigatório.",
            "number.required" => "O campo Número é obrigatório.",
            "complement.required" => "O campo Complemento é obrigatório.",
            "neighborhood.required" => "O campo Bairro é obrigatório.",
            "city.required" => "O campo Cidade é obrigatório.",
            "state.required" => "O campo Estado é obrigatório.",
            "workplace.required" => "O campo Local de Trabalho é obrigatório.",
            "file.required" => "O campo Arquivo é obrigatório.",
            "file.file" => "O arquivo deve ser válido.",
            "file.mimes" => "O arquivo deve ser do tipo PDF, DOC, DOCX, JPG ou PNG.",
            "file.max" => "O arquivo deve ter no máximo 2 MB.",
            "institution.required" => "O campo Instituição é obrigatório.",
            "institucionCity.required" => "O campo Cidade da Instituição é obrigatório."
        ];

        $request->validate($rules, $messages);

        try {

            $data = $request->all();

            $file = $request->file("file");

            Mail::to(env("MAIL_DESTINY"))
                ->send(new Email($data, $file));

            return redirect()->back()->with("success", "Enviado com sucesso!");
        } catch (Exception $error) {
            return redirect()->back()->with("error", "Ocorreu um erro!");
        }
    }
}
