<form action="{{ route('contact.send') }}" method="POST" class="container mt-5 p-4 shadow rounded bg-light">
    @csrf
    <h2 class="mb-4 text-center">Contact Us</h2>
    
    <div class="mb-3">
        <label class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Message:</label>
        <textarea name="message" class="form-control" rows="4" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary w-100 custom-btn">Send Message</button>
</form>
