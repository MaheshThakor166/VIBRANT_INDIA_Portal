<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // Method to handle the inquiry form submission
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'product_id' => 'required|string',
            'product_name' => 'required|string',
            'companyname' => 'nullable|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        // Store the validated data in the database
        $inquiry = new Inquiry();
        $inquiry->product_code = $request->input('product_id');
        $inquiry->product_name = $request->input('product_name');
        $inquiry->companyname = $request->input('companyname', null);
        $inquiry->name = $request->input('name');
        $inquiry->email = $request->input('email');
        $inquiry->phone = $request->input('phone', null);
        $inquiry->quantity = $request->input('quantity');
        $inquiry->message = $request->input('message', null);

        // Save the inquiry to the database
        $inquiry->save();

        // Redirect back with a success message
        return redirect()->route('user.home')->with('success', 'INQUIRY SUBMIT  successful!');
    }

    // Index method to display all inquiries
    public function index()
    {
        $inquiries = Inquiry::all();
        return view('adminpanel.inquiry.index', compact('inquiries'));
    }

    // Edit method to show a form for editing a specific inquiry
    public function edit($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('adminpanel.inquiry.edit', compact('inquiry'));
    }

    // Update method to save the changes for a specific inquiry
    public function update(Request $request, $id)
    {
        // Validate the updated data
        $validated = $request->validate([
            'product_id' => 'required|string',
            'product_name' => 'required|string',
            'companyname' => 'nullable|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        // Find the inquiry to update
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->product_code = $request->input('product_id');
        $inquiry->product_name = $request->input('product_name');
        $inquiry->companyname = $request->input('companyname', null);
        $inquiry->name = $request->input('name');
        $inquiry->email = $request->input('email');
        $inquiry->phone = $request->input('phone', null);
        $inquiry->quantity = $request->input('quantity');
        $inquiry->message = $request->input('message', null);

        // Save the updated inquiry to the database
        $inquiry->save();

        // Redirect back to the index page with a success message
        return redirect()->route('admin.inquiry.index')->with('success', 'Inquiry updated successfully.');
    }

    // Destroy method to delete a specific inquiry
    public function destroy($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('admin.inquiry.index')->with('success', 'Inquiry deleted successfully.');
    }
}
