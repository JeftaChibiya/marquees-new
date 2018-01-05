<template>
        <div>
        	<!-- links to a tab -->
            <div class="tabs is-centered is-boxed is-medium">
                <ul>
                    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
                        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
                    </li>
                </ul>
            </div>

            <!-- child goes here: Tab.vue -->
            <div class="tabs-details">
                <slot></slot>
            </div>
            
        </div>	
</template>


<script>
	export default{
		
		data() {
	        return { tabs: [] };
	    },

	    created() {
	        this.tabs = this.$children;
	    },

	    methods: {
	        selectTab(selectedTab) {
	            this.tabs.forEach(tab => {
	                tab.isActive = (tab.href == selectedTab.href);
	            });
	        }
	    }		
	}
</script>