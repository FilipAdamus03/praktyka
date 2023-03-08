// Model Użytkownika
public function customers()
{
    return $this->hasMany(Customer::class);
}

// Model Customera
public function user()
{
    return $this->belongsTo(User::class);
}