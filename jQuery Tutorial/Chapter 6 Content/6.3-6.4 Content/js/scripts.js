var Actors = {
  init: function (config) {
    this.config = config;

    $.ajaxSetup({
      url: "index.php",
      type: "POST",
    });

    this.setupTemplates();
    this.bindEvents();

    $("button").remove();
  },

  bindEvents: function () {
    this.config.letterSelection.on("change", this.fetchActors);
    this.config.actorsList.on("click", "li", this.displayAuthorInfo);
    this.config.actorInfo.on("click", "span.close", this.closeOverlay);
  },

  setupTemplates: function () {
    this.config.actorListTemplate = Handlebars.compile(
      this.config.actorListTemplate
    );
    this.config.actorInfoTemplate = Handlebars.compile(
      this.config.actorInfoTemplate
    );
    Handlebars.registerHelper("fullName", function (actor) {
      return actor.first_name + " " + actor.last_name;
    });
  },

  fetchActors: function () {
    var self = Actors;
    $.ajax({
      dataType: "json",
      data: self.config.form.serialize(),
      success: function (results) {
        self.config.actorsList.empty();
        if (results[0]) {
          self.config.actorsList.append(self.config.actorListTemplate(results));
        } else if (self.config.letterSelection.val() !== "-") {
          self.config.actorsList.append("<li>Nothing returned.</li>");
        }
      },
    });
  },
  displayAuthorInfo: function (e) {
    var self = Actors;

    self.config.actorInfo.slideUp(300);

    $.ajax({
      data: { actor_id: $(this).data("actor_id") },
      dataType: "JSON",
    }).done(function (results) {
      console.log(results[0]["film_info"]);
      self.config.actorInfo
        .html(self.config.actorInfoTemplate({ info: results[0]["film_info"] }))
        .slideDown(300);
    });

    e.preventDefault();
  },
  closeOverlay: function () {
    Actors.config.actorInfo.slideUp(300);
  },
};

Actors.init({
  letterSelection: $("#q"),
  form: $("#actor-selection"),
  actorListTemplate: $("#actor-list-template").html(),
  actorInfoTemplate: $("#actor-info-template").html(),
  actorsList: $("ul.actors_list"),
  actorInfo: $(".actor_info"),
});
