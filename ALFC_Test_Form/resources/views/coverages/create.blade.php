<form action="{{ route('coverages.store') }}" method="POST">
    @csrf
    <!-- Input fields for coverage data -->
    <input type="text" name="own_damage_theft" placeholder="Own Damage/Theft" required>
    <input type="text" name="bodilly_injured" placeholder="Bodily Injured" required>
    <input type="text" name="property_damage" placeholder="Property Damage" required>
    <input type="text" name="auto_pa_five_seats" placeholder="Auto PA Five Seats" required>
    <input type="text" name="aog" placeholder="AOG" required>
    <input type="text" name="rate" placeholder="Rate" required>
    <input type="number" name="sales_agent_id" placeholder="Sales Agent ID" required>
    <input type="number" name="category_id" placeholder="Category ID" required>
    <input type="number" name="provider_id" placeholder="Provider ID" required>
    <button type="submit">Submit</button>
</form>