@extends('layouts.main')

@section('content')
<style>
    .section-header {
        color: #1E40AF;
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .section-divider {
        border-bottom: 1px solid #e5e7eb;
        margin-bottom: 24px;
    }
    .form-label {
        font-size: 14px;
        font-weight: 500;
        color: #374151;
        margin-bottom: 6px;
        display: block;
    }
    .form-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        background-color: white;
        transition: border-color 0.15s ease-in-out;
    }
    .form-input:focus {
        outline: none;
        border-color: #1E40AF;
        box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
    }
    .form-select {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        background-color: white;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
        background-position: right 8px center;
        background-repeat: no-repeat;
        background-size: 16px;
        padding-right: 32px;
        appearance: none;
    }
    .form-select:focus {
        outline: none;
        border-color: #1E40AF;
        box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
    }
    .form-textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        background-color: white;
        resize: vertical;
        min-height: 80px;
    }
    .form-textarea:focus {
        outline: none;
        border-color: #1E40AF;
        box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
    }
    .browse-btn {
        background-color: #1E40AF;
        color: white;
        padding: 8px 16px;
        border-radius: 6px;
        border: none;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.15s ease-in-out;
    }
    .browse-btn:hover {
        background-color: #1d4ed8;
    }
    .required {
        color: #dc2626;
    }
    .section-icon {
        color: #1E40AF;
        font-size: 16px;
    }
</style>

<div class="p-6">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-8">
        <!-- Basic Information Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-info-circle section-icon"></i>
                Basic Information
            </div>
            <div class="section-divider"></div>
            
            <!-- Job Title Row -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="form-label">Job Title <span class="required">*</span></label>
                    <input type="text" class="form-input" placeholder="e.g Senior Software Developer">
                </div>
                <div>
                    <label class="form-label">Job Type <span class="required">*</span></label>
                    <select class="form-select">
                        <option>select Job type</option>
                        <option>Full-time</option>
                        <option>Part-time</option>
                        <option>Contract</option>
                        <option>Internship</option>
                    </select>
                </div>
            </div>
            
            <!-- Category and Job Level Row -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="form-label">Category <span class="required">*</span></label>
                    <select class="form-select">
                        <option>select Category</option>
                        <option>Software Development</option>
                        <option>Marketing</option>
                        <option>Sales</option>
                        <option>HR</option>
                        <option>Finance</option>
                        <option>Healthcare</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Job Level <span class="required">*</span></label>
                    <select class="form-select">
                        <option>select Job Level</option>
                        <option>Entry Level</option>
                        <option>Mid Level</option>
                        <option>Senior Level</option>
                        <option>Executive</option>
                    </select>
                </div>
            </div>
            
            <!-- Job Description -->
            <div class="mb-4">
                <label class="form-label">Job Description <span class="required">*</span></label>
                <textarea class="form-textarea" placeholder="Describe the job Responsibilities, task and expectation"></textarea>
            </div>
            
            <!-- Salary Range and Number of Vacancies Row -->
            <div class="grid grid-cols-12 gap-4 mb-4">
                <div class="col-span-6">
                    <label class="form-label">Salary Range (Optional)</label>
                    <div class="grid grid-cols-3 gap-2">
                        <input type="text" class="form-input" placeholder="Min">
                        <input type="text" class="form-input" placeholder="Max">
                        <select class="form-select">
                            <option>TSH</option>
                            <option>USD</option>
                            <option>EUR</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-6">
                    <label class="form-label">Number of Vacancies <span class="required">*</span></label>
                    <input type="text" class="form-input" placeholder="e.g. 2">
                </div>
            </div>
        </div>
        
        <!-- Company Information Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-building section-icon"></i>
                Company Information
            </div>
            <div class="section-divider"></div>
            
            <!-- Company Name and Industry Row -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" class="form-input" placeholder="e.g Amazon Corporation">
                </div>
                <div>
                    <label class="form-label">Industry <span class="required">*</span></label>
                    <select class="form-select">
                        <option>Select Industry</option>
                        <option>Technology</option>
                        <option>Healthcare</option>
                        <option>Finance</option>
                        <option>Education</option>
                        <option>Manufacturing</option>
                        <option>Retail</option>
                    </select>
                </div>
            </div>
            
            <!-- Company Website and Company Size Row -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="form-label">Company Website</label>
                    <input type="text" class="form-input" placeholder="e.g https://www.deepseek.com">
                </div>
                <div>
                    <label class="form-label">Company Size</label>
                    <select class="form-select">
                        <option>Select Company size</option>
                        <option>1-10 employees</option>
                        <option>11-50 employees</option>
                        <option>51-200 employees</option>
                        <option>200+ employees</option>
                    </select>
                </div>
            </div>
            
            <!-- Company Description -->
            <div class="mb-4">
                <label class="form-label">Company Description</label>
                <textarea class="form-textarea" placeholder="Tell Candidate about your company culture, value and mission"></textarea>
            </div>
            
            <!-- Upload Company Logo -->
            <div class="mb-4">
                <label class="form-label">Upload Company Logo</label>
                <div class="flex justify-center mt-2">
                    <button class="browse-btn" type="button">Browse</button>
                </div>
            </div>
        </div>

        <!-- Location Details Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-map-marker-alt section-icon"></i>
                Location Details
            </div>
            <div class="section-divider"></div>
            
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="form-label">Country <span class="required">*</span></label>
                    <select class="form-select">
                        <option value="">Select a country</option>
                        <option value="us">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                        <option value="au">Australia</option>
                        <option value="tz">Tanzania</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">City/Region</label>
                    <input type="text" class="form-input" placeholder="e.g. Dar-es-salaam">
                    <div class="text-sm text-gray-600 mt-1">Enter the city or region where the position is based</div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="form-label">Work Arrangement</label>
                    <select class="form-select">
                        <option value="">Select work arrangement</option>
                        <option value="onsite">On-site</option>
                        <option value="remote">Remote</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Address Details</label>
                    <input type="text" class="form-input" placeholder="Enter full address">
                </div>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Office Address <span class="text-gray-500 font-normal italic">(Optional)</span></label>
                <input type="text" class="form-input" placeholder="Enter office address if different">
            </div>
        </div>

        <!-- Requirements & Qualifications Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-clipboard-list section-icon"></i>
                Requirements & Qualifications
            </div>
            <div class="section-divider"></div>
            
            <div class="mb-4">
                <label class="form-label">Required Skills <span class="required">*</span></label>
                <div id="skills-container" class="mb-3">
                    <div class="skill-tag">HTML</div>
                    <div class="skill-tag">CSS</div>
                    <div class="skill-tag">JavaScript</div>
                </div>
                <div class="flex gap-2">
                    <input type="text" id="skill-input" class="form-input flex-grow" placeholder="Add a skill">
                    <button type="button" class="add-skill-btn" onclick="addSkill()">Add</button>
                </div>
                <div class="text-sm text-gray-600 mt-1">List the key skills required for this position</div>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Required Experience</label>
                <textarea class="form-textarea" placeholder="Describe the experience requirements"></textarea>
                <div class="text-sm text-gray-600 mt-1">Include years of experience, specific industry experience, etc.</div>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Education Requirements</label>
                <textarea class="form-textarea" placeholder="Describe the education requirements"></textarea>
                <div class="text-sm text-gray-600 mt-1">Include degrees, certifications, or specific educational background</div>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Additional Requirements</label>
                <textarea class="form-textarea" placeholder="Any additional requirements or preferences"></textarea>
                <div class="text-sm text-gray-600 mt-1">Include language requirements, certifications, soft skills, etc.</div>
            </div>
        </div>

        <!-- Application Instructions Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-paper-plane section-icon"></i>
                Application Method
            </div>
            <div class="section-divider"></div>
            
            <div class="mb-4">
                <label class="form-label">Application Method <span class="required">*</span></label>
                <select class="form-select">
                    <option value="">Select application method</option>
                    <option value="online">Online Application</option>
                    <option value="email">Email Application</option>
                    <option value="in-person">In-Person Application</option>
                    <option value="mail">Mail Application</option>
                </select>
            </div>
        </div>

        <!-- Application Deadline Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-calendar section-icon"></i>
                Application Deadline
            </div>
            <div class="section-divider"></div>
            
            <div class="mb-4">
                <label class="form-label">Application Deadline <span class="required">*</span></label>
                <input type="date" class="form-input">
            </div>
        </div>

        <!-- Required Documents Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-file section-icon"></i>
                Required Documents
            </div>
            <div class="section-divider"></div>
            
            <div class="mb-4">
                <div class="checkbox-group space-y-3">
                    <div class="checkbox-item flex items-center">
                        <input type="checkbox" id="cv-resume" name="required-docs" value="cv-resume" class="w-4 h-4 mr-3">
                        <label for="cv-resume" class="form-label mb-0">CV/Resume</label>
                    </div>
                    <div class="checkbox-item flex items-center">
                        <input type="checkbox" id="cover-letter" name="required-docs" value="cover-letter" class="w-4 h-4 mr-3">
                        <label for="cover-letter" class="form-label mb-0">Cover Letter</label>
                    </div>
                    <div class="checkbox-item flex items-center">
                        <input type="checkbox" id="educational-certificates" name="required-docs" value="educational-certificates" class="w-4 h-4 mr-3">
                        <label for="educational-certificates" class="form-label mb-0">Educational Certificates</label>
                    </div>
                    <div class="checkbox-item flex items-center">
                        <input type="checkbox" id="portfolio" name="required-docs" value="portfolio" class="w-4 h-4 mr-3">
                        <label for="portfolio" class="form-label mb-0">Portfolio</label>
                    </div>
                    <div class="checkbox-item flex items-center">
                        <input type="checkbox" id="references" name="required-docs" value="references" class="w-4 h-4 mr-3">
                        <label for="references" class="form-label mb-0">References</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Application Instructions Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-comment section-icon"></i>
                Additional Application Instructions
            </div>
            <div class="section-divider"></div>
            
            <div class="mb-4">
                <textarea class="form-textarea" placeholder="Enter any additional instructions for applicants"></textarea>
            </div>
        </div>

        <!-- Posting Options Section -->
        <div class="mb-8">
            <div class="section-header">
                <i class="fas fa-cog section-icon"></i>
                Posting Options
            </div>
            <div class="section-divider"></div>
            
            <div class="mb-4">
                <label class="form-label">Posting Duration <span class="required">*</span></label>
                <select class="form-select">
                    <option value="">Select duration</option>
                    <option value="7">7 days</option>
                    <option value="14">14 days</option>
                    <option value="30">30 days</option>
                    <option value="60">60 days</option>
                    <option value="90">90 days</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Posting Visibility</label>
                <div class="visibility-info bg-blue-50 p-3 rounded-lg text-blue-600">
                    Public (Visible to Everyone)
                </div>
            </div>
            
            <div class="featured-option flex items-center">
                <input type="checkbox" id="featured-posting" name="featured-posting" class="w-4 h-4 mr-3">
                <label for="featured-posting" class="form-label mb-0">Make this a featured posting (additional charges apply)</label>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end gap-4">
            <button type="button" class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg font-medium hover:bg-blue-50 transition-colors">
                Cancel
            </button>
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Save Job Posting
            </button>
        </div>
    </div>
</div>

<style>
    .skill-tag {
        display: inline-block;
        background-color: #EFF6FF;
        color: #1E40AF;
        padding: 5px 10px;
        border-radius: 20px;
        margin-right: 8px;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .add-skill-btn {
        background-color: #FACC15;
        color: #333;
        border: none;
        padding: 0 15px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: 500;
        transition: background-color 0.3s;
    }
    
    .add-skill-btn:hover {
        background-color: #f0b90b;
    }
    
    .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    
    .checkbox-item {
        display: flex;
        align-items: center;
    }
    
    .visibility-info {
        background-color: #EFF6FF;
        padding: 10px;
        border-radius: 4px;
        margin-top: 5px;
        color: #1E40AF;
    }
    
    .featured-option {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }
</style>

<script>
    function addSkill() {
        const skillInput = document.getElementById('skill-input');
        const skillValue = skillInput.value.trim();
        
        if (skillValue) {
            const skillsContainer = document.getElementById('skills-container');
            const skillTag = document.createElement('div');
            skillTag.className = 'skill-tag';
            skillTag.textContent = skillValue;
            
            skillsContainer.appendChild(skillTag);
            skillInput.value = '';
        }
    }
    
    document.getElementById('skill-input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            addSkill();
        }
    });
</script>
@endsection
